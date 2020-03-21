<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
  <head>
    <title>{{env('APP_NAME','FloraSyria')}} | @yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="{{setting('site.description')}}">
    {{-- Style --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    @if(App::getLocale()=="ar")
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @else
      <link rel="stylesheet" href="{{asset('css/enstyle.css')}}">
    
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- FavIcon --}}
    <link rel="apple-touch-icon"  href="{{setting('site.logo')}}">
    <link rel="icon" type="image/png" href="{{setting('site.logo')}}">


  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light fixed-top" id="ftco-navbar">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/logo-white.png')}}" width="90" height="50" alt="FloraSyria">
        </a> 

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	    </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">

	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item {{ Request::path()=='/' ? 'active' : ''}}"><a href="/" class="nav-link pl-0">{{ __('Home') }}</a></li>
            <li class="nav-item {{ Request::path()=='about' ? 'active' : ''}}"><a href="{{route('about',app()->getLocale())}}" class="nav-link">{{ __('founder') }}</a></li>
            <li class="nav-item {{ Request::path()=='topography' ? 'active' : ''}} dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{__('syria')}} 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{route('topography',app()->getLocale())}} ">{{__('Climate and Topography')}}</a>
                <a class="dropdown-item" href="{{route('soil',app()->getLocale())}} ">{{ __('soil') }}</a>
                <a class="dropdown-item" href="{{route('planetBio',app()->getLocale())}} "> {{ __('Plant Biodiversity') }}</a>
                <a class="dropdown-item" href="{{route('flora',app()->getLocale())}} "> {{ __('Flora') }}</a>
              </div>
            </li>
            <li class="nav-item {{ Request::path()=='team' ? 'active' : ''}}"><a href="{{route('team',app()->getLocale())}}" class="nav-link"> {{ __('team') }}</a></li>
            <li class="nav-item {{ Request::path()=='publications' ? 'active' : ''}}"><a href="{{route('publications',app()->getLocale())}}" class="nav-link">{{ __('publications') }}</a></li>
	        	<li class="nav-item {{ Request::path()=='advsearch' ? 'active' : ''}}"><a href="{{route('search',app()->getLocale())}} " class="nav-link">{{ __('Search') }}</a></li>
	          <li class="nav-item {{ Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact',app()->getLocale())}} " class="nav-link">{{ __('contact') }}</a></li>
	        </ul>
	      </div>

	  </nav>
    <!-- END nav -->

    @yield('content')

    @yield('footer')
      
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/scrollax.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    @yield('script')
      
    </body>
  </html>