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
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
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
  <section>
    <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
                            @foreach ($users as $row)
                          
							<div class="d-flex flex-column align-items-center text-center">
                            
								<img src="http://127.0.0.1:8000/assets/uploads/{{$row->image}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>John Doe</h4>
									<p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
								
									<a href="/messanger/{{$row->id}}" class="btn btn-outline-primary">Message</a>
								</div>
							</div>
                            @endforeach
							<hr class="my-4">
							
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					
					<div class="row">
						<div class="col-sm-12">
							 <div class="card">
                                @foreach ($formateur as $row2)
                                            <div class="card-body">
                                               
                                                <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                                
                                                @if($row2->porcentageskills<50)
                                                <p>{{$row2->nameskill}}</p>
                                                <div class="progress mb-3" style="height: 5px">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{$row2->porcentageskills}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @else
                                                <p>{{$row2->nameskill}}</p>
                                                <div class="progress mb-3" style="height: 5px">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{$row2->porcentageskills}}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                @endif
                                              
                
                                            </div>
                                            @endforeach
                                        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

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



        <div class="container">
            <div class="main-body">
            
                  <!-- Breadcrumb -->
                  <nav aria-label="breadcrumb" class="main-breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                      <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                  </nav>
                  <!-- /Breadcrumb -->
            
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