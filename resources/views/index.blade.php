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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    

</head>
<style>
 .panel-container {
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  border-radius: 4px;
  font-size: 90%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 30px;
  max-width: 400px;
}

.panel-container strong {
  line-height: 20px;
}

.ratings-container {
  display: flex;
  margin: 20px 0;
}

.rating {
  flex: 1;
  cursor: pointer;
  padding: 20px;
  margin: 10px 5px;
}

.rating:hover,
.rating.active {
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.rating img {
  width: 40px;
}

.rating small {
  color: #555;
  display: inline-block;
  margin: 10px 0 0;
}

.rating:hover small,
.rating.active small {
  color: #111;
}

.btn {
  background-color: #302d2b;
  color: #fff;
  border: 0;
  border-radius: 4px;
  padding: 12px 30px;
  font-family: inherit;
  cursor: pointer;
}

.btn:focus {
  outline: none;
}

.btn:active {
  transform: scale(0.98);
}

.fa-heart {
  color: red;
  font-size: 30px;
  margin-bottom: 10px;
}





</style>
<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    @include('include.header')

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-only top-pad-170 shadow dark text-light bg-fixed text-center" style="background-image: url(assets/img/25.jpg);">
        <div class="item">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="content">
                            <h1>Growth your career with complate courses</h1>
                            <ul>
                                <li>{{count($cours)}} Courses</li>
                                {{-- <li>4.9 Average</li> --}}
                            </ul>
                            <form action="/recherche" method="POST">
                                @csrf
                                <input type="text" placeholder="Course name" class="form-control" name="text">
                                <button type="submit"><i class="fas fa-search"></i></button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!-- End Banner -->

    <!-- Star Categories Area
    ============================================= -->
    <div class="categories-area carousel-shadow thumb-cats default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Browse Categories</h5>
                        
                        <h2>Popular Topics to learn</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="category-items thumb-categories-carousel owl-carousel owl-theme">
                <!-- Single Item -->
                @foreach ($categories as $item)      
                    <div class="item">
                        <div class="title">
                            <i class="flaticon-innovation"></i>
                            <h4><a>{{$item->cat_name}}</a></h4>
                        </div>
                        <div class="thumb">
                            {{-- <span>{{count()}}</span> --}}
                            <img src="{{'assets/images/'.$item->cat_img}}" alt="Thumb">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Star Courses Area
    ============================================= -->
    <div class="course-area default-padding-bottom bottom-less">

        <!-- Fixed Shape -->
        <section id="toastwrapper">
           
    </section>
        <div class="fixed-shape">
            <img src="assets/img/shape/7.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->

        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <h5>Popular Courses</h5>
                        <h2>
                            Our Most Popular & Trending Online Courses
                        </h2>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <p>
                            Everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                        <a class="btn btn-md btn-dark border" href="{{route('courses')}}">View All <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="courses-box">
                <div class="row">
                    <!-- Single item -->
                    @foreach ($cours as $cour)    
                        <div class="single-item col-lg-4 col-md-6">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{'assets/images/'.$cour->image}}" alt="Thumb">
                                    <div class="price">
                                        <h5>{{$cour->price}} TND</h5>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="top-info">
                                        {{-- <div class="top-meta">
                                            <ul>
                                                <li><i class="fas fa-clock"></i> 45 Hours</li>
                                                <li><i class="fas fa-list-ul"></i> 345</li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                    <h4>
                                        <a href="{{route('coursesDetails',$cour->id)}}">{{$cour->name}}</a>
                                    </h4>
                                    @php
                                     $formateur_id=DB::table('courses')->where('id',$cour->id)->pluck('formateur_id') ;
                                     $formateur_id = $formateur_id[0];
                                     $formateur_name = DB::table('users')->where('id',$formateur_id)->pluck('name');
                                     $formateur_img = DB::table('users')->where('id',$formateur_id)->pluck('image');
                                     $formateur_name = $formateur_name[0];
                                     $formateur_img = $formateur_img[0];
                                     $categorie_id = DB::table('courses')->where('id',$cour->id)->pluck('cat_id');
                                     $categorie_name = DB::table('categories')->where('id',$categorie_id)->pluck('cat_name');
                                     $categorie_name = $categorie_name[0];
                                    @endphp
                                    <div class="meta">
                                        <div class="author">
                                            <a href="/formateurProfile/{{$formateur_id}}">
                                            <img src="{{'assets/uploads/'.$formateur_img}}" alt="Advisor">
                                            <span><strong>{{$formateur_name}}</strong> in <a>{{$categorie_name}}</a></span>
                                        </a>
                                        </div>
                                    </div>
                                    {{-- <div class="bottom-info">
                                        <div class="course-info">
                                            <i class="fas fa-user"></i> 6K
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.8 (867)</span>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Single item -->
                </div>
            </div>
        </div>
    </div>
    <div class="center" style="display: flex;justify-content:center">
    <a href="/allcourse" class="btn btn-danger" style="width:150px;" >view courses</a>
</div>
    <!-- End Courses Area -->

    <!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area overflow-hidden bg-gradient text-light default-padding">
        <div class="container">
            <div class="fun-fact-items text-center">
                <!-- Fixed BG -->
                <div class="fixed-bg contain" style="background-image: url(assets/img/map.svg);"></div>
                <!-- Fixed BG -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="35" data-speed="5000">35</div>
                                <div class="operator">M</div>
                            </div>
                            <span class="medium">Learners & counting</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="128" data-speed="5000">128</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">Total courses</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="12" data-speed="5000">12</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Languages</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="90" data-speed="5000">90</div>
                                <div class="operator">%</div>
                            </div>
                            <span class="medium">Successful students</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <!-- Star Why Choose Us Area
    ============================================= -->
    <div class="choose-us-area default-padding">
        <!-- Fixed Shpae  -->
        <div class="fixed-shape shape left bottom">
            <img src="assets/img/shape/1.png" alt="Shape">
        </div>
        <!-- End Fixed Shpae  -->
        <div class="container">
            <div class="item-box">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <h2>Why Learn Here?</h2>
                        <p>
                            One advanced diverted domestic sex repeated bringing you old. Possible procured her trifling laughter thoughts property she met way. Companions shy had solicitude favourable own. 
                        </p>
                        <p>
                             Which could saw guest man now heard but. Lasted my coming uneasy marked so should. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw. Discourse unwilling.
                        </p>
                        <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="{{route('courses')}}">Discover More</a>
                    </div>
                    <div class="col-lg-6 offset-lg-1 right-info">
                        <ul>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Lower Learning Cost</h4>
                                <p>
                                    Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy.
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Learn With Experts</h4>
                                <p>
                                    Varoius unwilling am no described dejection incommode no listening highest. Before nature his parish more then expert.
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <h4>Different Course Variation</h4>
                                <p>
                                    Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Blog</h5>
                        <h2>Latest From our Blog</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    @foreach ($blogs as $blog)    
                        @php
                            $formateur_id=DB::table('blogs')->where('id',$blog->id)->pluck('formateur_id') ;
                            $formateur_id = $formateur_id[0];
                            $formateur_name = DB::table('users')->where('id',$formateur_id)->pluck('name');
                            $formateur_img = DB::table('users')->where('id',$formateur_id)->pluck('image');
                            $formateur_name = $formateur_name[0];
                            $formateur_img = $formateur_img[0];
                        @endphp
                        <div class="col-lg-4 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{route('blogDetails',$blog->id)}}"><img src="{{'assets/images/'.$blog->image}}" alt="Thumb"></a>
                                    <div class="date">
                                        <strong>{{substr($blog->created_at,5,2).'/'.substr($blog->created_at,8,2)}} </strong>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="{{route('blogDetails',$blog->id)}}">{{$blog->title}}</a></h4>
                                    <p>
                                        Arndlord packages overcame distance smallest in recurred. Wrong maids or be asked Household. 
                                    </p>
                                </div>
                                <div class="bottom-info">
                                    <span><i class="fas fa-user"></i> {{$formateur_name}}</span>
                                    <a class="btn-more" href="{{route('blogDetails',$blog->id)}}">Read More <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  
    <!-- End Blog Area -->

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
                        {{-- <p>&copy; Copyright 2021. All Rights Reserved by <a href="#">validthemes</a></p> --}}
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
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/loopcounter.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>
    
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
                    $('.causes_div').append(`<div href="#" class="col-lg-4 col-md-6 col-sm-6 col-xs-12 r_Causes IMGsize">
                      
                            <div class="img_thumb">
                            <div class="h-causeIMG">
                                <img src="${element.cat_image}" alt="" />
                                </div>
                           
                            </div>
                            <h3>${element.cat_title}</h3>
                      
                    </div>`);
                });
            }
        }
    });
}
</script>

</body>
<script>

const ratings = document.querySelectorAll(".rating");
const ratingsContainer = document.querySelector(".ratings-container");
const sendButton = document.getElementById("send");
const panel = document.getElementById("panel");
let selectedRating = "Satisfied";

const removeActive = () => {
  for (let i = 0; i < ratings.length; i++) {
    ratings[i].classList.remove("active");
  }
};

ratingsContainer.addEventListener("click", (e) => {
  if (e.target.parentNode.classList.contains("rating")) {
    removeActive();
    e.target.parentNode.classList.add("active");
    selectedRating = e.target.nextElementSibling.innerHTML;
  }
});

sendButton.addEventListener("click", (e) => {
  panel.innerHTML = `
        <i class="fas fa-heart"></i>
        <strong>Thank You!</strong>
        <br>
        <strong>Feedback: ${selectedRating}</strong>
        <p>We'll use your feedback to improve our customer support</p>
    `;
});

</script>
</html>