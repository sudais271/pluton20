<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Pluton | Write Blog</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<style>
.ck-editor__editable {
    min-height: 200px !important;
}
body{
    background-color:#2771CE;
}
.main{
    background-color: #2771CE;
    margin-top: 40px;
}
</style>

<body class="accounts">
    <!--====== Preloader Area Start ======-->
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
                <a class="navbar-brand" href="index.html">
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
                            @auth
                                <li class="nav-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button  class="btn-custom" style="margin:10px 10px;; width:140px;">Logout</button></a>
                                </li>
                            @endauth
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ***** Header End ***** -->
            <div class="container pt-5">
            <form method="post" action="newBlog" enctype="multipart/form-data">
            @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                              </div>
                                              <input type="text" class="form-control" name="title" placeholder="Title" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                              <textarea name="content" id="editor" cols="50" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                        <input type="file" class="form-control" name="image" id="image" required>
                                        </div>
                                        <div class="form-group">
                                              <div class="input-group">
                                                <select class="form-control" id="selectCategory" name="select">
                                                <option value='0' class="form-control">-- Select Category --</option>
                                                </select>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                                    Add Categories
                                                    </button>
                                              </div>
                                        </div>
                                        <!-- <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" name="featured" id="exampleCheck1">
                                            <label class="form-check-label contact-bottom" for="exampleCheck1">Featured</label>
                                        </div> -->
                                        <div>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-success w-100 mt-3" type="submit">Publish Now</button>
                                    </div>
                                </div>
                            </form>
            </div>
                            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel">Add New Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="category" class="col-form-label">Category:</label>
                            <input type="text" class="form-control" name="category" id="category">
                        </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary addcategory">Add Category</button>
                        <span class="text-red">Please reload the page after adding new category</span>
                    </div>
                    </div>
                </div>
                </div>
            <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
    <!-- ***** All jQuery Plugins ***** -->
    <script type="text/javascript">
CKEDITOR.replace('editor', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});
</script>


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
    <script>
            $(document).ready(function(){
                    $('#selectCategory').find('option').not(':first').remove();
                    $.ajax({

                    type:'POST',

                    url:'getCategory',

                    success:function(response){
                        var len = 0;
                            if(response['data'] != null){
                            len = response['data'].length;
                        }
                        if(len > 0)
                        {
                            // Read data and create <option >
                            for(var i=0; i<len; i++){

                                var id = response['data'][i].id;
                                var name = response['data'][i].category_name;

                                var option = "<option value='"+id+"'>"+name+"</option>";

                                $("#selectCategory").append(option);
                            }
                        }
                    }

                    });
                });
    </script>
    <script type="text/javascript">



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $(".addcategory").click(function(e){
        e.preventDefault();
        $("#exampleModal .close").click();


        var category = $("input[name=category]").val();

        $.ajax({

           type:'POST',

           url:'ajaxRequest',

           data:{category:category},

           success:function(data){

              alert(data.success);

           }

        });



	});

</script>
</body>

</html>
