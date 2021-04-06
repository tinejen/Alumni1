<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index(){
        
        $alumni = DB::table('users')
        ->join('alumni_posts', 'users.id', '=', 'alumni_posts.user_id')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->orderBy('alumni_posts.id', 'desc')
        ->get();

        if(Auth::user()->hasRole('alumni')){
            return view('alumni',['alumni_post'=>$alumni]);
        }elseif(Auth::user()->hasRole('alumnilead')){
            return view('lead');
        }elseif(Auth::user()->hasRole('admin')){
            return view('dashboard',['alumni_post'=>$alumni]);
        }elseif(Auth::user()->hasRole('unverified')){
            return view('unverified');
        }
    }
    // sa image
    public function crop(Request $request){

        $dest = 'images/'; // kung san mag save muna ng images
        $file = $request->file('dp'); // name nung input image na papasok
        $new_image_name = 'IMG'.date('YmDHis').uniqid().'.jpg';
        $move = $file->move(public_path($dest), $new_image_name);
        // uploading 
        if(!$move){
            return response()->json(['status'=>0,'msg'=>'Error Cropping']);
        }else{
            //delete kung meron na

            $userPic = Auth::user()->dp;
            if($userPic != ''){
                unlink($dest.$userPic);
            }
            //update ung file name ng image pagkatapus upload
            DB::table('users')->where('id',Auth::user()->id)->update(['dp'=>$new_image_name]);
            return response()->json(['status'=>1,'msg'=>'Crop Successfully.']);
            
        }

    }
    //eto un sa alumni lang
    public function bio(){
        // return Auth::user()->id;
        return view('mybio');
    }
    public function update_info(Request $request){
        $data = [
            'contact'=>$request->contact,
            'profession'=>$request->profession,
            'yeargrad'=>$request->yeargrad,
            'workingstatus'=>$request->workingstatus,
            'address'=>$request->address,
            'city'=>$request->city,
            'province'=>$request->province,
            'zip'=>$request->zip,
        ];
        DB::table('users')->where('id',Auth::user()->id)->update($data);
        return redirect() ->route('dashboard.mybio')->with('success','Profile Updated.');
    }
    public function posting(Request $request){
        $user = Auth::user();
        $roles = $user->getRoles()[0];
        DB::table('alumni_posts')->insert([
            'user_id' => Auth::user()->id,
            'topic' => $request->topic,
            'content'=> $request->content,
            'role'=> $roles,
        ]);
        return redirect() ->route('dashboard');

    }
    public function adminPost()
    {
        $admin = DB::table('users')
        ->join('admin_posts', 'users.id', '=', 'admin_posts.admin_id')
        ->orderBy('admin_posts.id', 'desc')
        ->get();
        return view('adminAnn',['admin_post'=>$admin]);
    }
    public function adminPost1()
    {
        $admin = DB::table('users')
        ->join('admin_posts', 'users.id', '=', 'admin_posts.admin_id')
        ->orderBy('admin_posts.id', 'desc')
        ->get();
        return view('adminAnn',['admin_post'=>$admin]);
    }
    public function adminposting(Request $request){
        // $mytimes = Carbon::now();
        // $aa = $mytimes->toRfc850String();
        // $oras = Str::of($aa)->trim('UTC');
        DB::table('admin_posts')->insert([
            'admin_id' => Auth::user()->id,
            'topic' => $request->topic,
            'content'=> $request->content,
            // 'oras'=> json_encode($oras),
        ]);
        return redirect() ->route('admin-post');
    }
}
