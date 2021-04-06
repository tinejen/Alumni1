<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ani.css') }}">
        <link rel="stylesheet" href="{{ asset('css/crop.min.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <br>
        <footer class="py-5 bg-dark">
    <div class="container animated fadeInUp">
      <p class="m-0 text-center text-white">© 2021 All rights reserved. Laguna University - MIS</p>
    </div>
    <!-- /.container -->
  </footer>
  <script src="{{ asset('js/jq2.js') }}"></script>
  <script src="{{ asset('js/jq.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jq3.js') }}"></script>
  <script src="{{ asset('js/crop.js') }}"></script>
  <script>
      $('#dp').ijaboCropTool({
          preview:'.user_dp',
          processUrl:'{{ route("mybio.crop")}}',
          withCSRF:['_token','{{ csrf_token()}}'],
          onSuccess:function(message, element, status){
            alert(message);
          },
          onError:function(message, element, status){
            alert(message);
        }
      });
  </script>   
    </body>
</html>
