<?php
/*Template Name: WORKING AT ACH CURRENT POSITIONS*/
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
<div class="viewport w60 bg-cover workingwithach_section2" style="background-image:url(<?php echo get_template_directory_uri() . "/img/workingwithach_img1.jpg" ?>); background-color: #0e1b28; background-position: center left;">

  <div class="workingwithach_title slidein">
  <h2>WORKING AT ACH </h2>
  </div>
</div>


<div class="viewport w50 workingwithach_section3 positions_section1 section_9" style="background-color:#fff;">
<h2>CURRENT POSITIONS <a href="#" class="current_positions_close">CLOSE</a></h2>
<ul class="current_positions_list">
<li>
<h5>Project Manager</h5>
<div class="positions_list_content"><a href="#" class="apply_button">APPLY</a>We are seeking a talented and experienced Project Manager. If you would like information on this role, please contact us here. <a href="#">View full job description</a></div>
</li>
<li>
<h5>Site Manager</h5>
<div class="positions_list_content"><a href="#" class="apply_button">APPLY</a>We are seeking a talented and experienced Project Manager. If you would like information on this role, please contact us here. <a href="#">View full job description</a></div>
</li>
<li>
<h5>Estimator</h5>
<div class="positions_list_content"><a href="#" class="apply_button">APPLY</a>We are seeking a talented and experienced Project Manager. If you would like information on this role, please contact us here. <a href="#">View full job description</a></div>
</li>
<li>
<h5>Send us your CV</h5>
<div class="positions_list_content"><a href="#" class="apply_button">APPLY</a>We welcome experienced and graduate applications. Please apply here to send us your CV.</div>
</li>
</ul>


</div>
<div class="viewport w50 workingwithach_section4 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/workingwithach_img2.png"?>);background-position: center right;">

</div>
<div class="viewport w100 workingwithach_section5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/workingwithach_img3.jpg"?>);background-position: center right;">

</div>

<?php get_footer();
                                                                                                                                                                                        
