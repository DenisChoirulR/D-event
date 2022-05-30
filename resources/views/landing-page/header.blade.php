<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title> D'event </title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->

    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{ asset('front/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/et-line.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{ asset('front/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('front/css/main.css') }}" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img src="{{ asset('front/img/logo.png') }}" alt="Evento"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link " href="/speaker">Speakers</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link " href="/event">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/teams">Our Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/contact">Contact</a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('login') }}">Login</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</header>
<!--header end here-->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>