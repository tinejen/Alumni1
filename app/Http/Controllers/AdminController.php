<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(){
         
    }
    public function verification()
    {
        $alumni = User::whereHas('roles', function($q){
            $q->whereIn('name', ['unverified'])
            ->select('users.name');
        })->get();
        return view('verification',['users'=>$alumni]);
    }
    public function destroy($alumni)
    {
        DB::table('users')->where('id',$alumni)->delete();
        DB::table('role_user')->where('user_id',$alumni)->delete();
        return redirect() ->route('dashboard.verification')->with('success','The account has been successfully deleted.');
    }
    public function update($alumni)
    {
        // return $alumni;
        DB::table('role_user')->where('user_id',$alumni)->update(['role_id'=> 3]);
        return redirect() ->route('dashboard.verification')->with('success','Account verified.');
    }
} 










//system call 'bloom blue roses'
// ('role_user','users.id', '=', mama isabella) let me sing a lullaby as you closed your eyes and as your drifting off to sleep