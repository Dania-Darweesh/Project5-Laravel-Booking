

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/harbor-lights/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Dec 2021 21:17:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>Harborlights - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- dania's-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/loginstyle.css')}}" />

    {{-- comment form style --}}
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- ------------------ --}}

</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('home')}}"><img style="width: 150px; height:80px" src="/images/logo1.png" alt=""></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{route('public.showAllRooms')}}" class="nav-link">Our Rooms</a></li>
            <li class="nav-item"><a href="{{route('userProfile.index')}}" class="nav-link">Profile</a></li>

	          <li class="nav-item"><a href="{{route('restaurant')}}" class="nav-link">Restaurant</a></li>
	          <li class="nav-item" style="margin-top: 20px!important;">
                      @auth
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                              <button class="btn btn-sm btn-outline-info  text-white border-0" type="submit">Log out</button>
                              @csrf
                          </form>
                      @endauth</li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
