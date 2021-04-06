<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alumni</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style> -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ani.css') }}">
        <style>
            body {
                font-family: 'Nunito';

            }
        </style>
    </head>
    <body class="antialiased bg-gray-100">
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
            <a href="{{ url('/dashboard') }}" class="font-semibold text-lg text-gray-700">Dashboard</a>
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
  <br>
  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5 animated fadeInLeft">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="/images/ban.jpg" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5 animated fadeInRight">
        <h3 class="font-weight text-gray-600">LAGUNA UNIVERSITY ALUMNI ASSOCIATION</h3>
        <p class="text-gray-600">The provincial Government of Laguna is committed to pursue a constitutional provision under Article 2 Section 17 to establish a University and promote the right of all Lagunenses to quality education to all levels. It is also aware of its obligations to give the less privileged but talented and gifted students of Laguna, the opportunity to accommodate graduates of secondary schools to pursue vocational and higher education courses.</p>
        <br>
        <a class="btn btn-success" href="{{ route('login') }}">More Info.</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-gray-300 my-5 py-2 text-center animated fadeInUp">
      <div class="card-body">
        <p class="text-gray-600 m-0">© 2021 All rights reserved. Laguna University - MIS</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-4 mb-5 animated fadeInUp">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title text-gray-600">OBJECTIVES</h3>
            <p class="card-text">To provide financial assistance to selected and deserving students of Laguna University
            To Mobilize Laguna University Alumni in extending support to Laguna University students as an expression of gratitude to what the university has contributed to their growth as professionals and individuals.
                To provide venues where beneficiaries can harness their skills while receiving support from the association.</p>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5 animated fadeInUp">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title text-gray-600">VISION</h3>
            <p class="card-text">A dynamic association of active Laguna University alumni who shares with the fulfilment of its mission; feeling ownership over its direction, and act as ambassadors of Integrity and Excellence.</p>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5 animated fadeInUp">
        <div class="card h-100">
          <div class="card-body">
            <h3 class="card-title text-gray-600">MISSION</h3>
            <p class="card-text">To establish and maintain strong partnership between our Alumni and the Laguna University by providing various benefits including career assistance, linkages, special activities and seminars, and the opportunity to inspire students and graduates. And, to engage Alumni in the realization of the mission, vision, and objectives of the Laguna University in order that each individual feels welcome and valued as a member of the Laguna University family.</p>
          </div>
        </div>
      </div>
      @include('layouts.footer')
    </body>
</html>