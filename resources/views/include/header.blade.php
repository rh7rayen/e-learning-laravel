    <!-- Start Header Top 
    ============================================= -->
    <style>
   
@keyframes fadeimg {
	0% {
		opacity: 0;
		transform: translateX(125px) translateY(40px);
	}
	2% {
		width: 100px;
	}
	5% {
		opacity: 1;
		width: 100px;
		transform: translateX(125px) translateY(40px);
	}
	10% {
		opacity: 1;
		width: 350px;
		transform: translateX(0px)  translateY(40px);
		visibility: visible;
	}
	20% {
		opacity: 1;
		width: 350px;
		visibility: visible;
		transform: translateX(0px)  translateY(40px);		
	}
	25%, 75% {
		opacity: 1;
		width: 350px;
		visibility: visible;
		transform: translateX(0px)  translateY(0px);
	}
	85% {
		opacity: 1;
		width: 350px;
		visibility: visible;
		transform: translateX(0px)  translateY(40px);
	}
	88.5% {
		opacity: 1;
		width: 100px;
		visibility: visible;
		transform: translateX(125px)  translateY(40px);
	}
	
	90%{
		opacity: 1;
		width: 100px;
		visibility: visible;
		transform: translateX(125px)  translateY(40px);
	}
	
	
	
}

@keyframes fadeintext {
	0% {
		opacity: 0;
	}
	1% {
		width: 230px;
	}
	4.5% {
		opacity: 1;
		width: 230px;
		visibility: visible;
		margin-left: 20px;
	}
	95.5% {
		opacity: 1;
		margin-left: 20px;
	}
	98% {
		width: 230px;
	}
	99.5% {
		margin-left: 0px;
		width: 0px;
	}

}

@keyframes bottomfadein {
	0% {
		opacity: 0;
	}	
	8% {
		opacity: 1;
		visibility: visible;
	}
	91% {
		opacity: 1;
		visibility: visible;
	}
	
}



.containernotif{
	display: flex;
	justify-content: center;
	width: 100%;
	height: 100%;
	z-index: 1000;
    color:white;
}

.notify-main {
	z-index: 1000;
	width: 350px;
	height: 140px;
	position: fixed;
	bottom: 30px;
}

.notify-top {
	z-index: 1000;
	width: 100px;
	height: 100px;
	background-color: #ff1949;
	display: flex;
	transform: translateX(125px);
	animation: fadeimg ease 10s 1 1s forwards;
	visibility: hidden;
	position: relative;
	z-index: 6;
}

.notify-img {
	height: 100px;
	width: 100px;
	align-self: center;
	display: inline-block;
	/*animation: changemargin 0s 1 3.5s forwards;*/
}

.notify-img img {
	width: 100%;
	height: 100%;
}

.notify-text {
	width: 0px;
	color: #303030;
	font-family: Montserrat, sans-serif;
	display: inline-block;
	justify-content: center;
	align-self: center;
	line-height: 25px;
	animation: fadeintext ease 7.7s 1 2s forwards;
	visibility: hidden;	
}

#headtext {
	font-size: 18px;
}

#subtext {
	font-size: 15px;
}

.notify-bottom {
	height: 40px;
	width: 100%;
	display: flex;
	justify-content: center;
	background-color: #3B0065;
	visibility: hidden;
	position: relative;
	z-index: 5;
	transition: background-color ease 0.3s;
	animation: bottomfadein 8s ease 1 2s forwards;
}

.notify-bottom:hover {
	background-color: #290046;
}

#bottomtext {
	align-self: center;
	color: azure;
	font-size: 16px;
	font-family: Montserrat,  sans-serif;
}

#bottomlink {
	text-decoration: none;
}





.active2{
	   display: none;
   }







<style>


.rating {
  display: flex;
  width: 100%;
  justify-content: center;
  overflow: hidden;
  flex-direction: row-reverse;
  height: 150px;
  position: relative;
}

.rating-0 {
  filter: grayscale(100%);
}

.rating > input {
  display: none;
}

.rating > label {
  cursor: pointer;
  width: 40px;
  height: 40px;
  margin-top: auto;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 76%;
  transition: .3s;
}

.rating > input:checked ~ label,
.rating > input:checked ~ label ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}


.rating > input:not(:checked) ~ label:hover,
.rating > input:not(:checked) ~ label:hover ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}

.emoji-wrapper {
  width: 100%;
  text-align: center;
  height: 100px;
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
}

.emoji-wrapper:before,
.emoji-wrapper:after{
  content: "";
  height: 15px;
  width: 100%;
  position: absolute;
  left: 0;
  z-index: 1;
}

.emoji-wrapper:before {
  top: 0;
  background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji-wrapper:after{
  bottom: 0;
  background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji {
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: .3s;
}

.emoji > svg {
  margin: 15px 0;
  width: 70px;
  height: 70px;
  flex-shrink: 0;
}

#rating-1:checked ~ .emoji-wrapper > .emoji { transform: translateY(-100px); }
#rating-2:checked ~ .emoji-wrapper > .emoji { transform: translateY(-200px); }
#rating-3:checked ~ .emoji-wrapper > .emoji { transform: translateY(-300px); }
#rating-4:checked ~ .emoji-wrapper > .emoji { transform: translateY(-400px); }
#rating-5:checked ~ .emoji-wrapper > .emoji { transform: translateY(-500px); }


.messanger {
  position: relative;
  z-index: 1000; }
  .messanger .cercle {
    position: fixed;
    bottom: 21px;
    right: 40px;
    width: 35px;
    height: 35px;
	border-radius: 100%;
    background-color: #d90632 !important;
}
    .messanger .cercle .fab {
      cursor: pointer;
      background-color: #d90632;
      padding: 6px;
      border-radius: 100%;
      margin: auto; }
  .messanger .chat_box {
    height: 380px;
    width: 280px;
  
    position: fixed;
    right: 87px;
    bottom: 21px; }
    .messanger .chat_box .chat-btn {
      background-color: #d90632;
      height: 40px;
      position: relative; }
      .messanger .chat_box .chat-btn span {
        color: white;
        margin-left: 10px;
        height: 100%;
        position: absolute;
        top: 5px;
        left: 5px; }
      .messanger .chat_box .chat-btn i {
        float: right;
        margin-left: 20px;
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer; }


.messanger {
  position: relative;
  z-index: 1000; }
  .messanger .cercle {
    position: fixed;
    bottom: 21px;
    right: 40px;
    width: 35px;
    height: 35px; }
    .messanger .cercle .fab {
      cursor: pointer;
      background-color: #d90632;
      padding: 6px;
      border-radius: 50%;
      margin: auto; }

</style>
    

    <div class="top-bar-area text-light transparent">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4 left-info">
                    <ul class="list">
                        <li>
                            Have any question? +123 456 7890
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 logo text-center">
                    <a href="#"><img src="assets/img/logo-light.png" alt="Logo"></a>
                </div>
                <div class="col-lg-4 right-info">
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
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        
                        @if (auth()->check() && auth()->user()->role=="admin")
                            <a href="{{route('admin')}}">Dashboard /</a>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button style="background: none" type="submit"><a><i class="fa fa-sign-in-alt"></i>Logout</a></button>
                                
                            </form>
                        @elseif (auth()->check() && auth()->user()->role=="formateur")
                            <a href="{{route('formateur_dashboard')}}">Dashboard /</a>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button style="background: none" type="submit"><a><i class="fa fa-sign-in-alt"></i>Logout</a></button>

                            </form>
							@elseif (auth()->check() && auth()->user()->role=="user")
                            <a href="/profile">profile /</a>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button style="background: none" type="submit"><a><i class="fa fa-sign-in-alt"></i>Logout</a></button>

                            </form>
                        @else
						
                            <div class="button">
                                <a href="{{route('register')}}">Register</a>
                                <a href="{{route('login')}}"><i class="fa fa-sign-in-alt"></i>Login</a>
                            </div>
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header>
        <div class="container">
            <div class="row">
                <!-- Start Navigation -->
                <nav id="mainNav" class="navbar logo-less navbar-default navbar-fixed white bootsnav on no-full nav-box no-background">

                    <div class="container">            

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" class="logo" alt="Logo"></a>
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
                
            </div>
        </div>
    </header>
	<section class="messanger">
		<div class="container">
		  <div class="cercle text-center" id="cercle">
			<i
			  class="fab fa-facebook-messenger fa-2x"
			  id="messanger-active"
			  style="color: white"
			></i>
		  </div>
		  <div class="feedback chat_box" style="" id="chat">

			<div id="panel" class="panel-container">
				<strong>How satisfied are you with our <br/>
				customer support performance?</strong>
				<div class="ratings-container">
				  <div class="rating" >
					<img src="https://i.ibb.co/fYN2rVn/no.png" alt="" class="ratingetoile" data-emoji="angry">
					<small>Unhappy</small>
				  </div>
		  
				  <div class="rating" >
					<img src="https://i.ibb.co/3M8Ddsf/neutral.png" alt="" class="ratingetoile"  data-emoji="natural"/>
					<small>Neutral</small>
				  </div>
		  
				  <div class="rating active"  >
					<img src="https://i.ibb.co/VVDYGLZ/yes.png" alt="" class="ratingetoile" data-emoji="excited"/>
					<small>Satisfied</small>
				  </div>
				</div>
				<form action="/rating" method="post" >
					@csrf
				  <input type="hidden" id="ratingtext"  name="rating">
				<button class="btn btn-success">send</button>
			  </form>
			  </div>
			  </div>
			
		  </div>
		</div>
	  </section>
	



		</section>
  <section id="containernotif">
	
  </section>
    <section id="containernotif">
		
	</section>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
	

 function load() {
var content = document.getElementById('containernotif');


axios.get('/notif').then((res) => {
 content.innerHTML = '';
for (var i = 0; i < res.data.length; i++) {

	 content.innerHTML+=`<div  class="containernotif" >
        <div class="notify-main">
            <div class="notify-top">
                <div class="notify-img">
					<img src="assets/images/${res.data[i]['image_profile']}" alt="profile_pic" style="width: 50px">
                </div>
                <div class="notify-text">
                    <p id="headtext" style="color: white">CODE. GAME. SLEEP. REPEAT.</p>
                   
                </div>
            </div>
         
              
            </a>
        </div>
    </div>`
}
});
}

 setInterval(() => {
	 load();
	

 }, 5000);




</script>
<script>
	let n = 0;
	var element = document.getElementById("cercle");
	var element2 = document.getElementById("messanger-active");
	var chat = document.getElementById("chat");
	element.addEventListener("click", () => {
	  chat.classList.toggle("active2");

	});
  </script>
  <script>

	let text=document.getElementById("ratingtext");
	const elements = document.querySelectorAll(".ratingetoile");
	
	
	
	elements.forEach((k) => {
	  k.addEventListener("click", (e) => {
	
		text.value=e.target.dataset.emoji;
	  });
	});
		  </script>
    <!-- End Header -->