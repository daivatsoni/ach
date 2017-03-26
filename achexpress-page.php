<?php
/*Template Name: ACH EXPRESS*/
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
  <h2>ACH EXPRESS</h2>
  </div>
</div>

<div class="viewport w50 workingwithach_section3 section_9 achexpress_page" style="background-color:#fff;">

<div class="section9_col1">
  <h2>We can  handle any project large or small</h2>
  <h4>SMALLER PROJECTS WILL BE HANDLED BY OUR ACH EXPRESS DIVISION.</h4>
  <p>The ACH Express team take a more hands on approach but you can be confident that no matter how fiddly the project there is no compromising on quality, reliability or safety.</p>

<p>Whether it be a small refurbishment, fitout or remedial work the same systems & procedures are implemented on these projects to ensure they are delivered to our high standards with no disruption to your operations.</p>
<a href="#" class="register_button">REGISTER YOUR INTEREST</a>
</div>
<div class="section9_col2 testmonial_slider_area">

<h3>TESTIMONIALS</h3>
<div class="owl-carousel owl-theme testmonial_slider">
            <div class="item">
<span class="client_name">Firstname Lastname</span>
<span class="designation">Position here</span>

<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

<p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
            </div>
            <div class="item">
<span class="client_name">Firstname Lastname</span>
<span class="designation">Position here</span>

<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

<p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
            </div>
            <div class="item">
<span class="client_name">Firstname Lastname</span>
<span class="designation">Position here</span>

<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

<p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
            </div>
          </div>  


</div>

</div>
<div class="viewport w50 workingwithach_section4 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/achexpress_img2.png"?>);background-position: center right;">

</div>
<div class="viewport w100 workingwithach_section5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/achexpress_img3.jpg"?>);background-position: center right;"></div>

<div class="viewport w100 workingwithach_section5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/achexpress_img4.jpg"?>);background-position: center right;"></div>

<div class="viewport w100 workingwithach_section5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() )."/img/achexpress_img5.jpg"?>);background-position: center right;"></div>

<?php get_footer();
                                                                                                                                                                                        