<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Pluton | Reset Password</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

</head>

<body class="inner">
<!--====== Preloader Area Start ======-->
<div class="preloader-main">
    <div class="preloader-wapper">
        <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
            <defs>
                <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                </filter>
            </defs>
            <g filter="url(#goo)">
                <circle class="dot" cx="50" cy="50" r="25" fill="#1255C0" />
                <circle class="dot" cx="50" cy="50" r="25" fill="#1E88E5" />
            </g>
        </svg>
        <div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
</div>
<!--====== Scroll To Top Area Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top Area End ======-->
<div class="main">
    <!-- ***** Header Start ***** -->
    <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
        <div class="container position-relative">
            <a class="navbar-brand" href="{{url('/#main')}}">
                <img class="navbar-brand-regular" src="{{asset('assets/img/logo/logo-white.png')}}" width="70%" alt="brand-logo">
                <img class="navbar-brand-sticky" src="{{asset('assets/img/logo/logo.png')}}" width="70%" alt="sticky brand-logo">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-inner">
                <!--  Mobile Menu Toggler -->
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="/#main">Main</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('/#features')}}">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="pluton_whitepaper.pdf">Whitepaper</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('/#faqs')}}">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('/#tokenomics')}}">Tokenomics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('/#roadmap')}}">Roadmap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/#contact')}}">Contact</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a href="login"><button class="btn-custom" style="margin:10px 10px; width:140px;">Login</button></a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item">
                                <a href="new-blog"><button class="btn-custom" style="margin:10px 10px; width:140px;">Write Blog</button></a>
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header End ***** -->

    <!-- ***** Forgot Area Start ***** -->
    <section class="section welcome-area bg-overlay subscribe-area h-100vh ptb_100">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="subscribe-content text-center">
                        <h1 class="text-white">Forgot your password?</h1>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        <p class="text-white my-4">Don't worry. Enter your email. We'll send you a password reset link to reset your password tempore repudiandae saepe aspernatur unde voluptate sapiente quia ex.</p>
                        <!-- Subscribe Form -->
                        <form class="subscribe-form"  method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email"  name="email" aria-describedby="emailHelp" placeholder="Enter your email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-lg btn-block">Reset Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Forgot Area End ***** -->
</div>


<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="{{asset('assets/js/jquery/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- Plugins js -->
<script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>

<!-- Active js -->
<script src="{{asset('assets/js/active.js')}}"></script>
</body>

</html>
