<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="token" content="{{csrf_token()}}">
    <!-- Title  -->
    <title>sApp - App Landing Page | Blog - Blog Details Right Sidebar</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

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
                    <img class="navbar-brand-regular" src="{{asset('assets/img/logo/logo-white.png')}}" alt="brand-logo">
                    <img class="navbar-brand-sticky" src="{{asset('assets/img/logo/logo.png')}}" alt="sticky brand-logo">
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

        <!-- ***** Breadcrumb Area Start ***** -->
        <section class="section breadcrumb-area bg-overlay d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
                            <h3 class="text-white">Blog Details</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog Details</a></li>
                                <li class="breadcrumb-item active">Right Sidebar</li>
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
                        <!-- Single Blog Details -->
                        <article class="single-blog-details">
                        @foreach($blog as $singleblog)
                            <!-- Blog Thumb -->
                            <div class="row">
                            <div class="col-md-4">
                                <div>
                                    <?php
                                        $url = Request::url();
                                        $arryId = explode("/",$url);
                                        $blogurl = $arryId[5];
                                        $id = \App\Blog::where(['slug' => $blogurl])->pluck('id')[0];
                                    ?>
                                    <span>
                                        {{count(\App\Vote::where(['blog_id' => $id])->where('upvote',1)->pluck('upvote'))}}
                                    </span>
                                   <button class="btn btn-primary upvote">Upvote</button>
                                </div>
                                <div>
                                    {{count(\App\Vote::where(['blog_id' => $id])->where('downvote',1)->pluck('downvote'))}}
                                    <button class="btn btn-primary downvote">Downvote</button>
                                </div>
                            </div>
                            <div class="blog-thumb col-md-8">
                                <a href="#"><img src="{{url('/public/uploads/'.$singleblog->filename)}}" width="1920" height="1280" alt=""></a>
                            </div>
                            </div>
                            <!-- Blog Content -->
                            <div class="blog-content sApp-blog">
                                <!-- Meta Info -->
                                <div class="meta-info d-flex flex-wrap align-items-center py-2">
                                    <ul>
                                        <li class="d-inline-block p-2">By <a href="#">{{$singleblog->user_name}}</a></li>
                                        <li class="d-inline-block p-2"><a href="#">{{$singleblog->created_at}}</a></li>
                                        <li class="d-inline-block p-2"><a href="#">2 Comments</a></li>
                                    </ul>
                                    <!-- Blog Share -->
                                    <div class="blog-share ml-auto d-none d-sm-block">
                                        <!-- Social Icons -->
                                        <div class="social-icons d-flex justify-content-center">
                                            <a class="bg-white facebook" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a class="bg-white twitter" href="#">
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a class="bg-white google-plus" href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Blog Details -->
                                <div class="blog-details">
                                    <h3 class="blog-title py-2 py-sm-3"><a href="#">{{$singleblog->title}}</a></h3>
                                    <p class="d-none d-sm-block">{!! $singleblog->description !!}</p>
                                    <p class="d-block d-sm-none">{!! $singleblog->description !!}</p>
                                </div>
                            </div>
                        @endforeach
                            <!-- Blog Comments -->
                            <div class="blog-comments">
                                <!-- Comments -->
                                <div class="comments my-3">
                                    <!-- Comments Title -->
                                    <h3 class="comments-title text-uppercase text-right mb-3">Recent Comments</h3>
                                    <!-- Single Comments -->
                                    @foreach($blog as $news)
                                    @foreach($news['comments'] as $comment)
                                    <div class="single-comments media p-3 p-lg-4">
                                        <!-- Comments Thumb -->
                                        <div class="comments-thumb avatar-lg">
                                            <img class="rounded-circle" src="{{asset('assets/img/avatar/avatar-2.png')}}" alt="">
                                        </div>
                                        <!-- Comments Content -->
                                        <div class="comments-content media-body pl-3">
                                            <h5 class="d-flex mb-2">
                                                <a href="#">{{$comment->name }}</a>
                                                <a href="#" class="ml-auto">Reply</a>
                                            </h5>
                                            <p class="d-none d-lg-block">{{$comment->comment }}</p>
                                            <p class="d-block d-lg-none">{{$comment->comment }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <!-- Blog Contact -->
                            <div class="blog-contact mt-4">
                            @if (Route::has('login'))
                            @auth
                                <!-- Contact Title -->
                                <h3 class="comments-title text-uppercase text-right mb-3">Post your Comments</h3>
                                <!-- Comment Box -->
                                <div class="contact-box comment-box">
                                    <form action="{{ url('comment') }}" method="post">
                                    {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name" placeholder="Name" required="required" readonly>
                                                </div>
                                            </div>
                                            @foreach($blog as $singleblog)
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{$singleblog->id }}" name="article_id" placeholder="Email" required="required" readonly style="display:none">
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="comment" placeholder="Message" required="required"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <input type="submit" onclick="myfun()" value="Comment" class="btn">
                                            </div>
                                        </div>
                                    </form>
                                    @else
                                    <form action="{{ route('login') }}">
                                        <input type="submit" class="btn" value="Please LogIn to Put a comment" />
                                    </form>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-lg-3">
                        <aside class="sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget">
                                <!-- Search Widget -->
                                <div class="widget-content search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your keywords">
                                    </form>
                                </div>
                            </div>
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
                                                <li><a href="#" class="d-flex p-3"><span>Web Design</span><span class="ml-auto">(14)</span></a></li>
                                                <li><a href="#" class="d-flex p-3"><span>App Landing</span><span class="ml-auto">(32)</span></a></li>
                                                <li><a href="#" class="d-flex active p-3"><span>Wordpress</span><span class="ml-auto">(27)</span></a></li>
                                                <li><a href="#" class="d-flex p-3"><span>UI Design</span><span class="ml-auto">(18)</span></a></li>
                                                <li><a href="#" class="d-flex p-3"><span>Bootstrap</span><span class="ml-auto">(15)</span></a></li>
                                                <li><a href="#" class="d-flex p-3"><span>Web Template</span><span class="ml-auto">(29)</span></a></li>
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
                                                <li>
                                                    <a href="#" class="single-post align-items-center align-items-lg-start media p-3">
                                                        <!-- Post Thumb -->
                                                        <div class="post-thumb avatar-md">
                                                            <img class="align-self-center" src="{{asset('assets/img/avatar/avatar-1.png')}}" alt="">
                                                        </div>
                                                        <div class="post-content media-body pl-3">
                                                            <p class="post-date mb-2">05 Feb, 2018</p>
                                                            <h6>Promote Your Apps With sApp</h6>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="single-post align-items-center align-items-lg-start media p-3">
                                                        <!-- Post Thumb -->
                                                        <div class="post-thumb avatar-md">
                                                            <img class="align-self-center" src="{{asset('assets/img/avatar/avatar-2.png')}}" alt="">
                                                        </div>
                                                        <div class="post-content media-body pl-3">
                                                            <p class="post-date mb-2">09 Apr, 2018</p>
                                                            <h6>Sell Your Product Like Never Before</h6>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="single-post align-items-center align-items-lg-start media p-3">
                                                        <!-- Post Thumb -->
                                                        <div class="post-thumb avatar-md">
                                                            <img class="align-self-center" src="{{asset('assets/img/avatar/avatar-3.png')}}" alt="">
                                                        </div>
                                                        <div class="post-content media-body pl-3">
                                                            <p class="post-date mb-2">13 Jul, 2018</p>
                                                            <h6>Built For Passionate People</h6>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="single-post align-items-center align-items-lg-start media p-3">
                                                        <!-- Post Thumb -->
                                                        <div class="post-thumb avatar-md">
                                                            <img class="align-self-center" src="{{asset('assets/img/avatar/avatar-4.png')}}" alt="">
                                                        </div>
                                                        <div class="post-content media-body pl-3">
                                                            <p class="post-date mb-2">03 Oct, 2018</p>
                                                            <h6>Get Unlimited Offers &amp; Plans</h6>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Widget -->
                            <div class="single-widget">
                                <!-- Tags Widget -->
                                <div class="accordions widget tags-widget" id="tags-accordion">
                                    <div class="single-accordion blog-accordion">
                                        <h5>
                                            <a role="button" class="collapse show text-uppercase d-block p-3" data-toggle="collapse" href="#accordion3">Popular Tags
                                            </a>
                                        </h5>
                                        <!-- Tags Widget Content -->
                                        <div id="accordion3" class="accordion-content widget-content collapse show" data-parent="#tags-accordion">
                                            <!-- Tags Widget Items -->
                                            <div class="widget-content tags-widget-items pt-2">
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">sApp</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Bootstrap</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">IOS</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Android</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Landing Page</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Business</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Fashion</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Media</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Lifestyle</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Wordpress</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Web Design</a>
                                                <a href="#" class="d-inline-block mt-2 mr-1 px-2 py-1">Mobile App</a>
                                            </div>
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
                                <img class="logo" src="{{asset('assets/img/logo/logo.png')}}" alt="">
                            </a>
                            <p class="mt-2 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis non, fugit totam vel laboriosam vitae.</p>
                            <ul class="d-flex flex-column flex-sm-row justify-content-between">
                                <li class="py-2"><a href="#">Affiliate program</a></li>
                                <li class="py-2"><a href="#">Terms &amp; Conditions</a></li>
                                <li class="py-2"><a href="#">Privacy Policy</a></li>
                                <li class="py-2"><a href="#">Refund Policy</a></li>
                            </ul>
                            <!-- Copyright Area -->
                            <div class="copyright-area border-0 pt-3">
                                <p>Made with <i class="icofont-heart-alt"></i> By <a href="#">Theme Land</a></p>
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
    <script src="{{asset('assets/js/jquery/jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>

    <!-- Active js -->
    <script src="{{asset('assets/js/active.js')}}"></script>

    <script type="text/javascript">



// $.ajaxSetup({
//
//     headers: {
//
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//
//     }
//
// });



$(".upvote").click(function(e){
    e.preventDefault();
    let initial_url = window.location.pathname;
    let url = initial_url .split( '/' );
    let blog_url = url[3];
    $.ajax({

        type:'POST',

        url : '{{ URL::route('upvote') }}',

        data: {
            "_token": "{{ csrf_token() }}",
            "url" : blog_url,
        },
       success:function(data){

           if(data.success){
               window.alert(data.success);
           }else{
               window.alert(data.error);
           }

       }

    });



});
$(".downvote").click(function(e){
    e.preventDefault();
    let initial_url = window.location.pathname;
    let url = initial_url .split( '/' );
    let blog_url = url[3];
    $.ajax({

        type:'POST',

        url : '{{ URL::route('downvote') }}',

        data: {
            "_token": "{{ csrf_token() }}",
            "url" : blog_url,
        },
        success:function(data){

            if(data.success){
                window.alert(data.success);
            }else{
                window.alert(data.error);
            }

        }

    });



});

</script>
</body>

</html>
