<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Banka', 'Banka') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <a class="navbar-brand"><img src="/images/logo.png" style="width: 180px" alt="#" /></a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link ml-4 btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <p class="text-info">
                                    {{ Auth::user()->name }}
                                    <img src="/images/{{ Auth::user()->image }}" class="ml-2 rounded-circle" style="width: 30px; height:30px;"  alt="hi">
                                </p>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 


        <main class="">
            @yield('content')
        </main>
    </div>
  
        <div class="footer bg-dark text-light">
           <div class="container p-4">
              <div class="row">
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
                  
                   <h2 >
                      <a  class="m-3  "href="#"> <i class="fab fa-facebook"></i></a>
                       <a class="m-3 " href="#"><i class="fab fa-linkedin"></i></a>
                      <a class="m-3 " href="#"><i class="fab fa-github"></i></a>
              
                   </h2>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <h3>About Us</h3>
                    <p>We’re building the world’s <br> first digital bank</p>
                    
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
                    <h3>Contact Us</h3>
               <ul>
                       <li>+212 616 133 655</li>
                       <li>Abdolaaziri@gmail.com</li>
                   </ul> 
                 </div>
            
              </div>
           </div>
           <hr class="bg-light">
           <div class="copyright text-center">
              <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                       <p>© 2021 All Rights Reserved. Design by Abdo</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     
    </div>
</body>
</html>
