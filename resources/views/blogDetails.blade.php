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
    <div class="se-pre-con"></div>
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
                            <li>
                                <i class="fas fa-bullhorn"></i> <a href="#">Become an Instructor</a>
                            </li>
                            <li>
                                <i class="fas fa-briefcase"></i> <a href="#">For Enterprise</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 right-info">
                    <div class="item-flex">
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
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
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url({{asset('assets/images/26.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Blog Single</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Blog Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    @php
        $formateur_id=DB::table('blogs')->where('id',$blog->id)->pluck('formateur_id') ;
        $formateur_id = $formateur_id[0];
        $formateur_name = DB::table('users')->where('id',$formateur_id)->pluck('name');
        $formateur_img = DB::table('users')->where('id',$formateur_id)->pluck('image');
        $formateur_name = $formateur_name[0];
        $formateur_img = $formateur_img[0];
    @endphp
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content col-lg-8 col-md-12">
                        <div class="item">
                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <img src="{{asset('assets/images/'.$blog->image)}}" alt="Thumb">
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="content">
                                    <div class="top-info">
                                        <ul>
                                            <li>
                                                <a href="#"><img src="{{asset('assets/images/'.$formateur_img)}}" alt="Author">{{$formateur_name}}</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i> {{$blog->created_at}}
                                            </li>
                                        </ul>
                                    </div>
                                    {!! $blog->text !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar col-lg-4 col-md-12">
                        <aside>
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" name="text" class="form-control">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Participate in staff meetingness manage dedicated</a>
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 12 Feb, 2020</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Future Plan & Strategy for Consutruction </a>
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 05 Jul, 2021</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <a href="#">Melancholy particular devonshire alteration</a>
                                            <div class="meta-title">
                                                <span class="post-date"><i class="fas fa-clock"></i> 29 Aug, 2020</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>category list</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">national <span>69</span></a>
                                        </li>
                                        <li>
                                            <a href="#">national <span>25</span></a>
                                        </li>
                                        <li>
                                            <a href="#">sports <span>18</span></a>
                                        </li>
                                        <li>
                                            <a href="#">megazine <span>37</span></a>
                                        </li>
                                        <li>
                                            <a href="#">health <span>12</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item gallery">
                                <div class="title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/800x800.png" alt="thumb">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item archives">
                                <div class="title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Aug 2020</a></li>
                                        <li><a href="#">Sept 2020</a></li>
                                        <li><a href="#">Nov 2020</a></li>
                                        <li><a href="#">Dec 2020</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item social-sidebar">
                                <div class="title">
                                    <h4>follow us</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <a href="#">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="g-plus">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-item tags">
                                <div class="title">
                                    <h4>tags</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li><a href="#">Fashion</a>
                                        </li>
                                        <li><a href="#">Education</a>
                                        </li>
                                        <li><a href="#">nation</a>
                                        </li>
                                        <li><a href="#">study</a>
                                        </li>
                                        <li><a href="#">health</a>
                                        </li>
                                        <li><a href="#">food</a>
                                        </li>
                                        <li><a href="#">travel</a>
                                        </li>
                                        <li><a href="#">science</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

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