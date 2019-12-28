<!DOCTYPE html>
<html lang="ar">
  <head>
    <title>{{env('APP_NAME','FloraSyria')}} | </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light fixed-top" id="ftco-navbar">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/logo-white.png')}}" width="90" height="50" alt="">
        </a> 
	    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	    </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">

	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item {{ Request::path()=='/' ? 'active' : ''}}"><a href="/" class="nav-link pl-0">الرئيسية</a></li>
	        	<li class="nav-item {{ Request::path()=='syria' ? 'active' : ''}}"><a href="#" class="nav-link"> عن سورية</a></li>
	        	<li class="nav-item {{ Request::path()=='about' ? 'active' : ''}}"><a href="/about" class="nav-link">المؤسس</a></li>
            <li class="nav-item {{ Request::path()=='team' ? 'active' : ''}}"><a href="/team" class="nav-link">فريق العمل</a></li>
            <li class="nav-item {{ Request::path()=='publications' ? 'active' : ''}}"><a href="/publications" class="nav-link">المنشورات</a></li>
	        	<li class="nav-item {{ Request::path()=='search' ? 'active' : ''}}"><a href="#" class="nav-link">بحث متقدم</a></li>
	          <li class="nav-item {{ Request::path()=='contact' ? 'active' : ''}}"><a href="#" class="nav-link">الاتصال بنا</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">

          <div class="row">
            <div class="col-md-12 text-center">
  
              <p>
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made  by <a href="#" target="_blank">FloraSyria</a>
   </p>
            </div>
          </div>
        </div>
      </footer>
      
    
  
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
      
    </body>
  </html>