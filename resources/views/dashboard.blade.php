<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight animated fadeInRight">
            {{ __('Alumni Post') }}
        </h2>
    </x-slot>

    <div class="pt-12 animated fadeInUp">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-10">
                            <h4>Hi! {{Auth::user()->name}}</h4>
                        </div>
                        <!-- <div class="col-2 align-items-end">
                            <button class="btn btn-outline-success" data-toggle="modal" data-target=".bd-example-modal-lg">Create Post</button>
                        </div> -->
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="animated fadeInUp">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-6">
                        @foreach($alumni_post as $posts)
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-1 pl-12">
                            <img src="/images/{{$posts->dp == '' ? 'prog.png' :$posts->dp}}" alt="" class="rounded-circle" width="50">
                            </div>
                            <div class="col-7">
                                <h5>{{ucfirst($posts->name)}}</h5>
                                <p class="text-sm text-gray-400">{{strtoupper($posts->role)}} | {{strtoupper($posts->dept_id)}}</p>
                            </div>
                            <div class="col-2"></div>
                        </div>
                        <div class="row">
                        <div class="col-2"></div>
                            <div class="col-8">
                                <div class="card-special p-3">
                                    <h5 class="fw-bolde">{{ucfirst($posts->topic)}}</h5>
                                    <h6 class="text-sm text-gray-600">{{ucfirst($posts->content)}}</h6>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</x-app-layout>
