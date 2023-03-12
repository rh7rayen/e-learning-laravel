$(document).ready(function(){
	$('.bars').click(function(){
        $('.nav-lien').slideToggle();
        $('.icone').toggleClass("rr");
         $('.bars').hide();
        
    });
    
	  $('.icone').click(function(){
    	$('.bars').show(500);
    	$('.nav-lien').slideUp();

        $('.icone').toggleClass("rr");

    	 });
	  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
$(window).scroll(function(){

       var sc=$(this).scrollTop();
       
       if(sc>70)
       {
       	$('header').addClass('sticky');
       }
       else
       {
       	$('header').removeClass('sticky');
       }
       
       if( sc > 1300) {
            $('.score').countTo(); // Run Count To Plugin
            $(window).off('scroll');
        }

    });
$(function(){
                $(window).scroll(function(){
                      
                  if($(this).scrollTop() == 0){
                      $("#to_up").hide()
              
                  }else{$("#to_up").show()
              }})
              $("#to_up a").click(function(){
                $("html,body").animate(
                    {scrollTop:0},800
                )
              });
              });

$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});

    $(document).ready(function(){
      $(".notification_icon .fa-bell").click(function(){
        $(".dropdown").toggleClass("active");
      });
       });
    

     $(document).ready(function(){
    $('.lien-technologie li').click(function(){
    var tech=$(this).attr('id');





$('.description-technologie > div').hide();
$('.description-technologie').contents().filter('#'+tech).fadeIn(2000);






  });
});
  });
