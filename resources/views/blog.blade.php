<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Pluton | Blog</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body class="blog blog-right">
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
                <img class="navbar-brand-regular" src="assets/img/logo/logo-white.png" width="70%" alt="brand-logo">
                <img class="navbar-brand-sticky" src="assets/img/logo/logo.png" width="70%" alt="sticky brand-logo">
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

        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                            <h3 class="text-white">Blog - Pluton Network</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog Posts</a></li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->
        <!-- ***** Blog Area Start ***** -->
        <section id="blog" class="section blog-area ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            @foreach($blogs as $blogdemo)
                                <div class="col-12 col-md-6">
                                    <!-- Single Blog -->
                                    <div class="single-blog res-margin">
                                        <!-- Blog Thumb -->
                                        <div class="blog-thumb">
                                            <a href="{{url('blog/'.$blogdemo->slug)}}"><img src="{{url('/public/uploads/'.$blogdemo->filename)}}" alt=""></a>
                                        </div>
                                        <!-- Blog Content -->
                                        <div class="blog-content p-4">
                                            <!-- Meta Info -->
                                            <ul class="meta-info d-flex justify-content-between">
                                                <li>By <a href="#">{{ $blogdemo->user_name}}</a></li>
                                                <li><a href="#">{{ $blogdemo->created_at}}</a></li>
                                            </ul>
                                            <!-- Blog Title -->
                                            <h3 class="blog-title my-3"><a href="{{url('blog/'.$blogdemo->slug)}}">{{ $blogdemo->title}}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <aside class="sidebar">
                            <!-- Single Widget -->
                            <!-- <div class="single-widget"> -->
                                <!-- Search Widget -->
                                <!-- <div class="widget-content search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your keywords">
                                    </form>
                                </div>
                            </div> -->
                            <!-- Single Widget -->
                            <div class="single-widget">
                                <!-- Category Widget -->
                                <div class="accordions widget catagory-widget" id="cat-accordion">
                                    <div class="single-accordion blog-accordion">
                                        <h5>
                                            <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion1">Categories
                                            </a>
                                        </h5>
                                        <!-- Category Widget Content -->
                                        <div id="accordion1" class="accordion-content widget-content collapse show" data-parent="#cat-accordion">
                                            <!-- Category Widget Items -->
                                            <ul class="widget-items">
                                            @foreach($categories as $category)
                                                <li><a href="{{url('category/'.$category->category_name)}}" class="d-flex p-3"><span>{{$category->category_name}}</span></a></li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Widget -->
                            <div class="single-widget">
                                <!-- Post Widget -->
                                <div class="accordions widget post-widget" id="post-accordion">
                                    <div class="single-accordion">
                                        <h5>
                                            <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion2">Popular Post
                                            </a>
                                        </h5>
                                        <!-- Post Widget Content -->
                                        <div id="accordion2" class="accordion-content widget-content collapse show" data-parent="#post-accordion">
                                            <!-- Post Widget Items -->
                                            <ul class="widget-items">
                                                @foreach($popular as $populars)
                                                <li>
                                                    <a href="{{url('blog/'.$populars->slug)}}" class="single-post media p-3">
                                                        <!-- Post Thumb -->
                                                        <div class="post-thumb avatar-md">
                                                            <img class="align-self-center" src="{{url('/public/uploads/'.$populars->filename)}}" height="64" width="64" alt="">
                                                        </div>
                                                        <div class="post-content media-body pl-3">
                                                            <p class="post-date mb-2">{{$populars->created_at}}</p>
                                                            <h6>{{$populars->title}}</h6>
                                                        </div>
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Blog Area End ***** -->

        <!--====== Footer Area Start ======-->
        <footer class="section inner-footer bg-gray ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Footer Items -->
                        <div class="footer-items text-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">
                                <img class="logo" src="assets/img/logo/logo.png" alt="">
                            </a>
                            <p class="mt-2 mb-3">Pluton Blogging Network is an open-source blockchain platform that allows users to read their favorite content online while allowing authors and aspiring writers to publish e-books, post their content and receive comments from their readers.</p>
                            <ul class="d-flex flex-column flex-sm-row justify-content-between">
                                <li class="py-2"><a href="#">Affiliate program</a></li>
                                <li class="py-2"><a href="#">Terms &amp; Conditions</a></li>
                                <li class="py-2"><a href="#">Privacy Policy</a></li>
                                <li class="py-2"><a href="#">Refund Policy</a></li>
                            </ul>
                            <!-- Copyright Area -->
                            <div class="copyright-area border-0 pt-3">
                                <p>&copy; Copyrights 2020 Pluton All rights reserved.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--====== Footer Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
</body>

</html>
