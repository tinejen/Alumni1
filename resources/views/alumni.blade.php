<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight animated fadeInRight">
            {{ __('Whats on your mind?') }}
        </h2>
    </x-slot>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"  role="document">
            <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title">Alumni Post</h5>
                </div>
                <form method="POST" action="{{ route('dashboard.posting') }}">
                    @csrf
                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label for="topic" class="col-form-label">Topic:</label>
                            <input type="text" class="form-control" name="topic">
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-form-label">Message:</label>
                            <textarea style="height: 300px" class="form-control" name="content"></textarea>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="pt-12 animated fadeInUp">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-10">
                            <h4>Hi! {{ucfirst(Auth::user()->name)}}</h4>
                        </div>
                        <div class="col-2 align-items-end">
                            <button class="btn btn-outline-success" data-toggle="modal" data-target=".bd-example-modal-lg">Create Post</button>
                        </div>
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
