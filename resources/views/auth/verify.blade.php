<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Pluton | Login</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

</head>

<body class="homepage-5 accounts">

<!--====== Scroll To Top Area Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top Area End ======-->
<div class="main">
    <!-- ***** Header Start ***** -->
    <header class="navbar navbar-sticky navbar-expand-lg navbar-dark">
        <div class="container position-relative">
            <a class="navbar-brand" href="index.html">
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
                            <a class="nav-link scroll" href="#main">Main</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="pluton_whitepaper.pdf">Whitepaper</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#faqs">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#tokenomics">Tokenomics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#roadmap">Roadmap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn-custom" style="margin:10px 10px;; width:140px;">Sign Up</button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section id="home" class="section welcome-area bg-overlay d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-lg-7">
                    <div class="welcome-intro">
                        <h1 class="text-white">Verify Your Email Address!</h1>
                        <p class="text-white my-4">Before proceeding, please check your email for a verification link.</p>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-5">
                    <!-- Contact Box -->
                    <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                        <!-- Contact Form -->
                            <div class="contact-top">
                                <h4 class="contact-title">{{ __("If you didn't receive the email, request a new one here ") }}</h4>
{{--                                <h5 class="text-secondary fw-3 py-3">{{ __('Verify Your Email Address') }}</h5>--}}
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    @if (session('resent'))
                                        <div style="margin-top: 20px;" class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address. ') }}
                                        </div>
                                    @endif

                                    {{ __('') }}
                                        <br>
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button style="margin-top: -20px" type="submit" class="btn btn-primary ">{{ __('Resend') }}</button>
                                    </form>
                                </div>
                            </div>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape Bottom -->
        <div class="shape-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="shape-fill" fill="#FFFFFF" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7  c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4  c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
            </svg>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
</div>


<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<!-- <script src="assets/js/jquery/jquery-3.3.1.min.js"></script> -->

<!-- Bootstrap js -->
<!-- <script src="assets/js/bootstrap/popper.min.js"></script> -->
<!-- <script src="assets/js/bootstrap/bootstrap.min.js"></script> -->

<!-- Plugins js -->
<!-- <script src="assets/js/plugins/plugins.min.js"></script> -->

<!-- Active js -->
<!-- <script src="assets/js/active.js"></script> -->
</body>

</html>
