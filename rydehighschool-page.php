<?php
/*Template Name: RYDE HIGH SCHOOL*/
get_header();
?>
<div id="container" class="wrapper main">
<script>

$(document).ready(function () {

// when headline is clicked video will start
$('#playvid, playvid a').click(function (e) {
	e.preventDefault();
	var myVideo = document.getElementById("video-background");

	if (myVideo.paused) {
		myVideo.play();
	} else {
		myVideo.pause();
	}

	$(this).fadeOut(1000);

	$('#play, #pause').fadeIn();
});

// trigger for play and pause
$('#play').click(function () {
	var myVideo = document.getElementById("video-background");
	myVideo.play();
});

$('#pause').click(function () {
	var myVideo = document.getElementById("video-background");
	myVideo.pause();
});
});

$(window).on("load, resize", function () {
// hide video for mobile version
if ($(window).width() <= 1024) {
	$('#embedVideo').hide();
} else {
	$('#embedVideo').show();
}
});
</script>
<div class="viewport w30 bg-cover" style="background-color:#fff;">
  <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri()."/img/logo.png" ?>" alt="ACH Clifford" /></a></div>
</div>
<div class="viewport w60 bg-cover rydehighsecholl_section2" style="background-image:url(<?php echo get_template_directory_uri() . "/img/rydehighsecholl_img1.jpg" ?>); background-color: #0e1b28; background-position: center left;">

  <div class="rydehighsecholl_title slidein">
  <h2>RYDE HIGH SCHOOL</h2>
  <h3>EDUCATION</h3>
  </div>
</div>


<div class="viewport w80 section_5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/rydehighsecholl_img2.jpg"?>);background-position: center right;">

</div>
<div class="viewport w80 section_5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/rydehighsecholl_img3.jpg"?>);background-position: center right;">

</div>
<div class="viewport w80 section_5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/rydehighsecholl_img4.jpg"?>);background-position: center right;">

</div>
<div class="viewport w80 section_5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/rydehighsecholl_img5.jpg"?>);background-position: center right;">

</div>

















<div class="viewport vertical-slider section_4"> <a href="#" class="carousel-control next"><i class="icon-angle-up"></i></a> <a href="#" class="carousel-control prev"><i class="icon-angle-down"></i></a>
  <div class="carousel">
  
    <div class="item " style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img1.jpg)"> 
    <a href="#">
      <div class="item_des">
        <div class="item_title">
          <h3>RYDE HIGH SCHOOL</h3>
        </div>
      </div>
      </a>
       </div>
    <div class="item " style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img2.jpg)"> <a href="#">
      <div class="item_des">
        <div class="item_title">
          <h3>KURRI KURRI TAFE</h3>
        </div>
      </div>
      </a> </div>
	<div class="item " style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img3.jpg)"> <a href="#">
      <div class="item_des">
        <div class="item_title">
          <h3>RYDE HIGH SCHOOL</h3>
        </div>
      </div>
      </a> </div>
    <div class="item " style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img4.jpg)"> <a href="#">
      <div class="item_des">
        <div class="item_title">
          <h3>HARBORD PUBLIC SCHOOL</h3>
        </div>
      </div>
      </a> </div>
    <div class="item " style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img5.jpg)"> <a href="#">
      <div class="item_des">
        <div class="item_title">
          <h3>STANMORE PUBLIC SCHOOL</h3>
        </div>
      </div>
      </a> </div>
      
      
  </div>
</div>


<?php get_footer();
                                                                                                                                                                                        
