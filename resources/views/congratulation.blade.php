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
<style>
.congrats {
	position: absolute;
	top: 140px;
	width: 550px;
	height: 100px;
	padding: 20px 10px;
	text-align: center;
	margin: 0 auto;
	left: 0;
	right: 0;
}

h1 {
	transform-origin: 50% 50%;
	font-size: 50px;
	font-family: 'Sigmar One', cursive;
	cursor: pointer;
	z-index: 2;
	position: absolute;
	top: 0;
	text-align: center;
	width: 100%;
}

.blob {
	height: 50px;
	width: 50px;
	color: #ffcc00;
	position: absolute;
	top: 45%;
	left: 45%;
	z-index: 1;
	font-size: 30px;
	display: none;	
}
</style>
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
    
    






























    <!-- End Breadcrumb -->

    <!-- Start Course Details 
    ============================================= -->
  
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 info">

                   

                    <div class="main-content">
                        <div class="center-tabs">
                           
                            <div id="tabsContent" class="tab-content">
                                

                              
                                <div id="tab3" class="tab-pane advisor fade">
                                  
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
             
            </div>
        </div>
    </div>
    <!-- End Course Details -->


  



    <div class="congrats">
        <h1>Congratulations!</h1>
        <h1 style="margin-top:50px;">{{ Auth::user()->name }}</h1>
    </div>
    











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
<script>
$(function() {
	var numberOfStars = 20;
	
	for (var i = 0; i < numberOfStars; i++) {
	  $('.congrats').append('<div class="blob fa fa-star ' + i + '"></div>');
	}	

	animateText();
	
	animateBlobs();
});

$('.congrats').click(function() {
	reset();
	
	animateText();
	
	animateBlobs();
});

function reset() {
	$.each($('.blob'), function(i) {
		TweenMax.set($(this), { x: 0, y: 0, opacity: 1 });
	});
	
	TweenMax.set($('h1'), { scale: 1, opacity: 1, rotation: 0 });
}

function animateText() {
		TweenMax.from($('h1'), 0.8, {
		scale: 0.4,
		opacity: 0,
		rotation: 15,
		ease: Back.easeOut.config(4),
	});
}
	
function animateBlobs() {
	
	var xSeed = _.random(350, 380);
	var ySeed = _.random(120, 170);
	
	$.each($('.blob'), function(i) {
		var $blob = $(this);
		var speed = _.random(1, 5);
		var rotation = _.random(5, 100);
		var scale = _.random(0.8, 1.5);
		var x = _.random(-xSeed, xSeed);
		var y = _.random(-ySeed, ySeed);

		TweenMax.to($blob, speed, {
			x: x,
			y: y,
			ease: Power1.easeOut,
			opacity: 0,
			rotation: rotation,
			scale: scale,
			onStartParams: [$blob],
			onStart: function($element) {
				$element.css('display', 'block');
			},
			onCompleteParams: [$blob],
			onComplete: function($element) {
				$element.css('display', 'none');
			}
		});
	});
}
</script>

</html>