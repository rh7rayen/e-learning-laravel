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
    .bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
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


    

  


    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 _leftNav mb-30">

                    <div class="card leftNav cate-sect mb-30">
                        <h3>Refine By:<span class="_t-item">(0 items)</span></h3>
                        <div class="col-12 p-0" id="catFilters"></div>
                    </div>

                    <div class="card leftNav cate-sect">

                        <div class="accordion" id="accordionExample">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Categories</button>
                            </div>

                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="panel-body">

                                <?php $counter=0; ?>
                                @if(!empty($main_category))
                                @foreach ($main_category as $category)
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" {{($counter == 0 ? 'checked' : '')}}
                                        attr-name="{{$category->cat_name}}"
                                        class="custom-control-input category_checkbox" id="{{$category->id}}">
                                    <label class="custom-control-label"
                                        for="{{$category->id}}">{{ucfirst($category->cat_name)}}</label>
                                </div>
                                <?php $counter++; ?>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 col-md-12 col-sm-12 mb-30">
                    <div class="card rightSide h-100 mb-0">
                        <h1><span class="greencolor category_name_heading">{{ $sub_categories->name }}</span></h1>
                        <div class="row m-0 causes_div">

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    $(document).ready(function() {
    $(document).on('click', '.category_checkbox', function () {

        var ids = [];

        var counter = 0;
        $('#catFilters').empty();
        $('.category_checkbox').each(function () {
            if ($(this).is(":checked")) {
                ids.push($(this).attr('id'));
                $('#catFilters').append(`<div class="alert fade show alert-color _add-secon" role="alert"> ${$(this).attr('attr-name')}<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> </div>`);
                counter++;
            }
        });

        $('._t-item').text('(' + ids.length + ' items)');

        if (counter == 0) {
            $('.causes_div').empty();
            $('.causes_div').append('No Data Found');
        } else {
            fetchCauseAgainstCategory(ids);
        }
    });
});

function fetchCauseAgainstCategory(id) {

    $('.causes_div').empty();

    $.ajax({
        type: 'GET',
        url: 'get_causes_against_category/' + id,
        success: function (response) {
            var response = JSON.parse(response);
            console.log(response);
            
            if (response.length == 0) {
                $('.causes_div').append('No Data Found');
            } else {
                response.forEach(element => {
                    $('.causes_div').append(`<div class="card" style="width: 18rem;">
                    
  <img class="card-img-top" src="http://127.0.0.1:8000/assets/images/${element.image}" alt="Card image cap">
  <h4>${element.name}</h4>
  <div class="card-body">
    <p class="card-text">${element.description}</p>
   
  </div>
  <a href="coursesDetails/${element.id}" class="btn btn-primary">detais cours</a>
</div>`


);
                });
            }
        }
    });
}
</script>
</body>
</html>