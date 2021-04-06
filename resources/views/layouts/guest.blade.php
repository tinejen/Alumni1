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
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-gray-300 fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/images/alumnilogo.png" alt="" width="40" height="34" class="d-inline-block align-top">
      <h5 class="d-inline-block font-weight text-gray-800">LAGUNA UNIVERSITY ALUMNI</h5>
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      @if (Route::has('login'))
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-lg text-gray-700">LOGIN</a>
          </li>
          <li class="nav-item">
            @if (Route::has('register'))
           <a href="{{ route('register') }}" class="font-semibold ml-4 text-lg text-gray-700">REGISTER</a>
            @endif
        @endauth
          </li>
        </ul>
        @endif
      </div>
    </div>
  </nav>
  <br>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    <br>
        <footer class="py-5 bg-dark">
    <div class="container animated fadeInUp">
      <p class="m-0 text-center text-white">© 2021 All rights reserved. Laguna University - MIS</p>
    </div>
    <!-- /.container -->
  </footer>

    </body>
</html>
