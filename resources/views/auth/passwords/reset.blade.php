<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>sApp - App Landing Page | Reset Password</title>

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
                <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
                <circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
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
            <a class="navbar-brand" href="index.html">
                <img class="navbar-brand-regular" width="70%" src="{{asset('assets/img/logo/logo-white.png')}}" alt="brand-logo">
                <img class="navbar-brand-sticky" width="70%" src="{{asset('assets/img/logo/logo.png')}}" alt="sticky brand-logo">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="index.html">Homepage-1</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index-2.html">Homepage-2</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index-3.html">Homepage-3</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index-4.html">Homepage-4</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index-5.html">Homepage-5</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index-6.html">Homepage-6</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#features">Features</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:;">Inner Pages<span class="badge badge-pill badge-warning ml-2">New</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="pricing.html">Pricing</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="download.html">Download</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="newsletter.html">Newsletter</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="thank-you.html">Thank you</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="404.html">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:;">Blog Pages</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="blog-two-column.html">Blog- 2 Column</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-three-column.html">Blog- 3 Column</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-left-sidebar.html">Blog- Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-right-sidebar.html">Blog- Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:;">Blog Details</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="blog-details-left-sidebar.html">Blog Details- Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-details-right-sidebar.html">Blog Details- Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:;">Accounts<span class="badge badge-pill badge-warning ml-2">New</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="signup.html">Signup</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="forgot.html">Reset Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="reviews.html">Reviews</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="contact.html">Contact</a>
                                </li>
                                <li>
                                    <a class="dropdown-item disabled" href="#">More Coming Soon</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#screenshots">Screenshots</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact">Contact</a>
                        </li>
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
                        <h1 class="text-white">Reset Password</h1>
                        <div class="card-body">
                            <p class="text-white my-4"></p>
                            <!-- Subscribe Form -->
                            <form class="subscribe-form" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus aria-describedby="emailHelp" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                <button type="submit" style="background-color: #1255C0 !important;" class="btn btn-lg btn-block">Reset</button>
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
