<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Edukat - Education and LMS Template">

    <!-- ========== Page Title ========== -->
    <title>Edukat - Education and LMS Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    

</head>

<body>

    <!-- Preloader Start -->
    {{-- <div class="se-pre-con"></div> --}}
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark text-light inline inc-border">
        <div class="container-full">
            <div class="row align-center">
                
                <div class="col-lg-7 col-md-12 left-info">
                    <div class="item-flex">
                        <ul class="list">
                            <li>
                                <i class="fas fa-phone"></i> Have any question? +123 456 7890
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 right-info">
                    <div class="item-flex">
                        <div class="button">
                            <a href="#">Register</a>
                            <a href="#"><i class="fa fa-sign-in-alt"></i>Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky dark bootsnav">

            <div class="container-full">

                <!-- Start Atribute Navigation -->
                
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('assets/img/logo.png')}}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="{{route('index')}}" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('courses')}}" class="dropdown-toggle" data-toggle="dropdown" >Courses</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Teachers</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{asset('assets/images/12.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Course Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Course Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Course Details 
    ============================================= -->
    @php
        $formateur_id=DB::table('courses')->where('id',$cours->id)->pluck('formateur_id') ;
        $formateur_id = $formateur_id[0];
        $formateur_name = DB::table('users')->where('id',$formateur_id)->pluck('name');
        $formateur_img = DB::table('users')->where('id',$formateur_id)->pluck('image');
        $formateur_name = $formateur_name[0];
        $formateur_img = $formateur_img[0];
        $categorie_id = DB::table('courses')->where('id',$cours->id)->pluck('cat_id');
        $categorie_name = DB::table('categories')->where('id',$categorie_id)->pluck('cat_name');
        $categorie_name = $categorie_name[0];   
    @endphp
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 info">

                    <div class="top-info">
                        <h2>{{$cours->name}}</h2>
                        <ul>
                            <li>
                                <div class="thumb">
                                    <img src="http://127.0.0.1:8000/assets/uploads/{{$formateur_img}}" alt="Advisor">
                                </div>
                                <div class="info">
                                    <span>Teacher</span>
                                    <h5>{{$formateur_name}}</h5>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <span>Category</span>
                                    <h5>{{$categorie_name}}</h5>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <span>Last Update</span>
                                    <h5>{{$cours->updated_at}}</h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="main-content">
                        <div class="center-tabs">
                            <ul id="tabs" class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">Curriculum</a>
                                </li>
                               
                               
                            </ul>
                            <div id="tabsContent" class="tab-content">
                                <div id="tab1" class="tab-pane overview fade active show">
                                    <h4>Course Desscription</h4>
                                    <p>
                                        {{$cours->description}}
                                    </p>
                                </div>
                                <div id="tab2" class="tab-pane curriculum fade">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      {{$cours->name}}
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        @for ($i = 0; $i < count($cours->files); $i++)    
                                                            <li>
                                                                <div class="left-content">
                                                                    <span>01</span>
                                                                    <i class="fas fa-play-circle"></i>
                                                                    <h5><a target="_blank" href="{{route('coursesPreview',$cours->files[$i]->id)}}">{{$cours->files[$i]->file}}</a></h5>
                                                                </div>
                                                                <div class="right-content">
                                                                    <a href="#">Preview</a>
                                                                </div>
                                                            </li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tab-pane advisor fade">
                                    <div class="advisor-items">
                                        <!-- Single Item -->
                                        <div class="single-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 thumb">
                                                    <img src="{{asset('assets/img/800x800.png')}}" alt="Advisor">
                                                </div>
                                                <div class="col-lg-8 col-md-8 info">
                                                    <h4>Jones Mark</h4>
                                                    <span>Java Programmer</span>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <span>4.8 (867)</span>
                                                    </div>
                                                    <p>
                                                        Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described. 
                                                    </p>
                                                    <ul>
                                                        <li><i class="fas fa-play"></i> 12 Courses</li>
                                                        <li><i class="fas fa-comment-alt"></i> 867 Rating</li>
                                                        <li><i class="fas fa-users"></i> 4k Students</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Item -->
                                        <!-- Single Item -->
                                        <div class="single-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 thumb">
                                                    <img src="assets/img/800x800.png" alt="Advisor">
                                                </div>
                                                <div class="col-lg-8 col-md-8 info">
                                                    <h4>Adom Mohaa</h4>
                                                    <span>Professor</span>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <span>4.8 (867)</span>
                                                    </div>
                                                    <p>
                                                        Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling am no described. 
                                                    </p>
                                                    <ul>
                                                        <li><i class="fas fa-play"></i> 12 Courses</li>
                                                        <li><i class="fas fa-comment-alt"></i> 867 Rating</li>
                                                        <li><i class="fas fa-users"></i> 4k Students</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Item -->
                                    </div>
                                </div>
                                <div id="tab4" class="tab-pane reviews fade">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="avg-ratings">
                                                <h2>4.9</h2>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                1,455 Ratings
                                            </div>
                                        </div>
                                        <div class="col-lg-8 rating-counter">
                                            <ul>
                                                <li>
                                                    <span>5 Star</span>
                                                    <span>13</span>
                                                    <div class="rating-bar"></div>
                                                </li>
                                                <li>
                                                    <span>4 Star</span>
                                                    <span>1</span>
                                                    <div class="rating-bar"></div>
                                                </li>
                                                <li>
                                                    <span>3 Star</span>
                                                    <span>0</span>
                                                    <div class="rating-bar"></div>
                                                </li>
                                                <li>
                                                    <span>2 Star</span>
                                                    <span>1</span>
                                                    <div class="rating-bar"></div>
                                                </li>
                                                <li>
                                                    <span>1 Star</span>
                                                    <span>0</span>
                                                    <div class="rating-bar"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rating-provider">
                                        <!-- Single Item -->
                                        <div class="single-item">
                                            <div class="thumb">
                                                <img src="assets/img/800x800.png" alt="Thumb">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <h4>Mira Jone</h4>
                                                    <span>15 December, 2020</span>
                                                </div>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <div class="content">
                                                    <p>
                                                        Agreeable law unwilling sir deficient curiosity instantly. Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share least. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Item -->
                                        <!-- Single Item -->
                                        <div class="single-item">
                                            <div class="thumb">
                                                <img src="assets/img/800x800.png" alt="Thumb">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <h4>Mira Jone</h4>
                                                    <span>15 December, 2020</span>
                                                </div>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <div class="content">
                                                    <p>
                                                        Agreeable law unwilling sir deficient curiosity instantly. Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share least. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 sidebar">
                    <!-- Single Item -->
                    <div class="item course-preview">
                        <div class="thumb">
                            <img src="{{asset('assets/images/'.$cours->image)}}" alt="Thumb">
                        
                        </div>
                        <div class="content">
                            <div class="top">
                                <div class="pricce">
                                    <h3 style="font-weight: bold">{{$cours->price}} TND</h3>
                                </div>
                            </div>
                            <div class="course-includes">
                                <ul>
                                    <li>
                                        <i class="fas fa-sliders-h"></i> Skill level <span class="float-right">{{$cours->dificulties}}</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-language"></i> Language <span class="float-right">English</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-users"></i> Students <span class="float-right">12K</span>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn btn-theme effect btn-sm" href="/panier/{{$cours->id}}">Enroll Now</a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Details -->

    <!-- Star Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Required honoured trifling eat pleasure man relation. Assurance yet bed was improving furniture man. Distrusts delighted
                            </p>
                            <p class="text-italic">
                                Please write your email and get our amazing updates, news and support*
                            </p>
                            <div class="subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>  
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Usefull Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Courses</a>
                                </li>
                                <li>
                                    <a href="#">Event</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Faqs</a>
                                </li>
                                <li>
                                    <a href="#">Teachers</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Support</h4>
                            <ul>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                                <li>
                                    <a href="#">Forums</a>
                                </li>
                                <li>
                                    <a href="#">Language Packs</a>
                                </li>
                                <li>
                                    <a href="#">Release Status</a>
                                </li>
                                <li>
                                    <a href="#">LearnPress</a>
                                </li>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong>Email:</strong> support@validtheme.com
                                    </li>
                                    <li>
                                        <strong>Contact:</strong> +44-20-7328-4499
                                    </li>
                                </ul>
                            </div>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
                                <ul>
                                    <li> <span> Mon - Tues :  </span>
                                      <div class="float-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li> <span> Wednes - Thurs :</span>
                                      <div class="float-right"> 8.00 am - 6.00 pm </div>
                                    </li>
                                    <li> <span> Sun : </span>
                                      <div class="float-right closed"> Closed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2021. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer-->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.custom.13711.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/progress-bar.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/count-to.js')}}"></script>
    <script src="{{asset('assets/js/YTPlayer.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/loopcounter.js')}}"></script>
    <script src="{{asset('assets/js/bootsnav.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>