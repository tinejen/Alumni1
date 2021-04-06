<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight animated fadeInRight">
            {{ __('Alumni') }}
        </h2>
    </x-slot>

    <div class="py-12 animated fadeInUp">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($message = Session::get('success'))
                    <div class="alert alert-success animated fadeInDown">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                <table class="table table-striped">
                    <thead class="thead-dark text-white bg-dark">
                        <tr>
                            <th scope="col">Student No.</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Course</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $alumni)
                        <tr>
                        <th scope="row">{{$alumni['stdnum']}}</th>
                        <td class="text-uppercase">{{$alumni['name']}}</td>
                        <td>{{$alumni['email']}}</td>
                        <td class="text-uppercase">{{$alumni['dept_id']}}</td>

                        <td class="text-center">
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-3 justify-content-end">
                                <form action="{{ route('alumni.update', $alumni->id) }}" method="POST">
   
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Accept</button>
                            </form>
                                </div>
                                <div class="col-3 m-0">
                                <form action="{{ route('alumni.destroy', $alumni->id) }}" method="POST">
                                <!-- <a href="{{ route('alumni.update', $alumni->id) }}" class="btn btn-success">Accept</a>
                                 -->
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deny</button>
                            </form>  
                            <div class="col-3"></div>
                                </div>
                            </div>
                        
                            
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>