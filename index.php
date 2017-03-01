<?php
get_header();
?>

<div class="tutorial-overlay-wrap">
  <div class="tutorial-overlay"> </div>
  <div class="tutorial-cycle">
    <div class="tutorial-mouse"> <svg version="1.1" id="mouse" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="59.528px" height="107.717px" viewBox="0 0 59.528 107.717" enable-background="new 0 0 59.528 107.717"
                 xml:space="preserve">
      <path id="frame1" fill="#ffffff" d="M29.764,107.717C13.352,107.717,0,94.364,0,77.952V29.764C0,13.352,13.352,0,29.764,0
                      s29.764,13.352,29.764,29.764v48.188C59.528,94.364,46.176,107.717,29.764,107.717z M29.764,2.835
                      c-14.849,0-26.929,12.08-26.929,26.929v48.188c0,14.85,12.08,26.931,26.929,26.931c14.849,0,26.93-12.081,26.93-26.931V29.764
                      C56.694,14.915,44.613,2.835,29.764,2.835z M29.764,16.984c-3.131,0-5.669,2.539-5.669,5.669v14.183
                      c0,3.131,2.539,5.669,5.669,5.669s5.669-2.539,5.669-5.669V22.654C35.433,19.523,32.895,16.984,29.764,16.984z"/>
      <path id="wheel" fill="#000000" d="M29.767,30.365c0,0.782-0.635,1.417-1.417,1.417s-1.417-0.635-1.417-1.417v-7.091
                      c0-0.783,0.635-1.417,1.417-1.417s1.417,0.635,1.417,1.417V30.365z"/>
      </svg>
      <div class="tutorial-text">please scroll <img src="<?php echo get_template_directory_uri() . "/img/dbl-arrow-nxt.png" ?>" alt="&raquo;" /></div>
    </div>
    <div class="tutorial-menu"> <svg version="1.1" id="browser" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="188.834px" height="114.834px" viewBox="0 0 188.834 114.834" enable-background="new 0 0 188.834 114.834"
                 xml:space="preserve">
      <path id="frame2" fill="#ffffff" d="M183.417,0h-178C2.43,0,0,2.43,0,5.417v104c0,2.987,2.43,5.417,5.417,5.417h178
                      c2.987,0,5.417-2.43,5.417-5.417v-104C188.834,2.43,186.405,0,183.417,0z M186,109.417c0,1.424-1.159,2.583-2.583,2.583h-178
                      c-1.424,0-2.583-1.159-2.583-2.583V41.666L32,12.501h154V109.417z M5.6,18.155h9.877c0.552,0,1,0.448,1,1s-0.448,1-1,1H5.6
                      c-0.552,0-1-0.448-1-1S5.047,18.155,5.6,18.155z M4.6,15.081c0-0.552,0.448-1,1-1h9.877c0.552,0,1,0.448,1,1s-0.448,1-1,1H5.6
                      C5.047,16.081,4.6,15.633,4.6,15.081z M5.6,22.23h9.877c0.552,0,1,0.448,1,1s-0.448,1-1,1H5.6c-0.552,0-1-0.448-1-1
                      S5.047,22.23,5.6,22.23z M186,9.666H2.835V5.417c0-1.424,1.158-2.583,2.583-2.583h178c1.424,0,2.583,1.158,2.583,2.583V9.666z"/>
      <path id="arrow" fill="#ffffff" d="M95.726,69.645c-0.37,0-0.726-0.206-0.899-0.562l-3.573-7.311l-3.914,3.555
                      c-0.293,0.267-0.717,0.334-1.077,0.174c-0.362-0.16-0.595-0.52-0.595-0.914V45.333c0-0.383,0.218-0.732,0.562-0.899
                      c0.343-0.168,0.754-0.125,1.054,0.112l15.214,11.926c0.312,0.244,0.45,0.649,0.353,1.033s-0.412,0.674-0.802,0.74l-5.181,0.881
                      l3.545,7.227c0.116,0.238,0.134,0.514,0.047,0.764c-0.086,0.252-0.268,0.458-0.506,0.574l-3.791,1.853
                      C96.023,69.613,95.873,69.645,95.726,69.645z"/>
      </svg>
      <div class="tutorial-text">or use the menu</div>
    </div>
  </div>
</div>
<div class="progressbar">
  <div class="progress"></div>
</div>
<div class="menu-trigger"> <a href="#" class="menu-trigger-link"><span class="icon-reorder">&nbsp;</span></a> </div>
<div class="menu">
  <div class="inner">
    <div class="content"> <a href="#" class="menu-trigger-close"></a>
      <div class="collections keep-ratio__11">
        <div class="inner">
          <div id="ajax-menu"></div>
        </div>
      </div>
      
<nav class="nav_area">
<div class="menu_logo">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/menu_area_logo.png" class="menu_area_logo" alt="" />
</div>
        <ul>
          <li class="home"><a href="#">Home</a></li>
          <li>
            <div class="accordion">
              <h3>WHO WE ARE</h3>
              <div>
                <div class="inner">
                <a href="#">ABOUT US</a>
                <a href="#">HISTORY</a>
                <a href="#">POLICIES</a>
                <a href="#">ACCREDITATION</a>
                <a href="#">ASSOCIATIONS</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="accordion">
              <h3>THE ACH DIFFERENCE</h3>
              <div>
                <div class="inner">
                <a href="#">ABOUT US</a>
                <a href="#">HISTORY</a>
                </div>
              </div>
            </div>
          </li>
          
          <li>
            <div class="accordion">
              <h3>OUR WORK</h3>
              <div>
                <div class="inner">
                <a href="#">ABOUT US</a>
                <a href="#">HISTORY</a>
                </div>
              </div>
            </div>
          </li>
          
          <li>
            <div class="accordion">
              <h3>WORK WITH ACH</h3>
              <div>
                <div class="inner">
                <a href="#">ABOUT US</a>
                <a href="#">HISTORY</a>
                </div>
              </div>
            </div>
          </li>
          
          <li>
            <div class="accordion">
              <h3>NEWS</h3>
              <div>
                <div class="inner">
                <a href="#">ABOUT US</a>
                <a href="#">HISTORY</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="accordion">
              <h3>CONTACT US</h3>
              <div>
                <div class="inner">
                <a href="#">ABOUT US</a>
                <a href="#">HISTORY</a>
                </div>
              </div>
            </div>
          </li>
          
        </ul>
        <ul class="social_icons">
        <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook1.png" /></a></li>
        <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/instagram1.png" /></a></li>
        <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/twitter1.png" /></a></li>
        <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/linkedin1.png" /></a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
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
  <div class="logo"><img src="<?php echo get_template_directory_uri()."/img/logo.png" ?>" alt="ACH Clifford" /></div>
</div>
<div class="viewport w70 bg-cover homepage-2" style="background-image:url(<?php echo get_template_directory_uri() . "/img/slides/hpslide2.jpg" ?>); background-color: #0e1b28; background-position: center right;">
  <?php /* <div class="topline slidein"><img src="http://cdn.jan-kath.com/dist/img/homepage/slide_02-text.png" alt="slide" /></div> */ ?>
  <div class="topline slidein">Realising an architectural vision<br/>
    takes passion, commitment,<br/>
    and unwavering attention<br/>
    to detail.</div>
  <?php /* <div class="collection-link slidein"><a class="arrow" href="/collection/erased_heritage/">View Collection</a></div> */ ?>
</div>
<div class="viewport w30 bg-cover section_3">
  <div class="top25">
  
    <div class="white-orange-heading">50 YEARS<br>
      <span>STRONG</span>
      </div>
    <h3 class="subheading">We build for life.</h3>
    
    <div class="section_des">
      <p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>
      <p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
    <div class="btn"> <a href="#">About Us</a> <a href="#">View Projects</a> </div>
    </div>
    
  </div>
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
          <h3>RYDE HIGH SCHOOL</h3>
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
    <div class="item " style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img2.jpg)"> <a href="#">
      <div class="item_des">
        <div class="item_title">
          <h3>RYDE HIGH SCHOOL</h3>
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
      
      
  </div>
</div>

<div class="viewport w80 section_5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide-1.png);background-position: center right;">
<div class="slider_caption_area">
<span class="slider_caption slidein">NGALLU WAL - DOONSIDE<br />
ABORIGINAL MEDICAL CENTER</span>
</div>

</div>

<div class="viewport w80 bg-cover section_6" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide-2.png); background-position: center left;">
 
 <div class="slider_caption_area">
<span class="slider_caption slidein">TARONGA ZOO<br />
TREE KANGAROO EXHIBIT</span>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/zoo_logo.png" width="236" height="100" alt="zoo_logo" class="zoo_logo" /> </div> 
 
</div>


<div class="viewport w100 bg-cover section_6" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide-3.png);background-position: center left;">

<div class="viewport section_blank" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide-blank.png);background-position: center left;"></div>

  <div class="slider_caption_area">
<span class="slider_caption slidein" style=" line-height:42px;">STANMORE PUBLIC SCHOOL</span>
</div>

</div>




<div class="viewport w50 section_7">
  <div id="tabs" class="tab_content">
        <ul class="tab_button_set">
          <li><a href="#aboutus">About Us</a></li>
          <li><a href="#history">History</a></li>
          <li><a href="#policies">Policies</a></li>
          <li><a href="#accreditations">Accreditations</a></li>
          <li><a href="#associations">Associations</a></li>
        </ul>
<div id="aboutus">
<h2>OUR STORY</h2>          
<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

<p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>

<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

<p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
          
</div>
<div id="history">
<h2>History</h2>

</div>

<div id="policies">
<h2>Policies</h2>
 
</div>  
<div id="accreditations">
<h2>Policies</h2>
<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience.</p>
<ul class="accreditations_img_list">
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/accreditations_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/accreditations_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/accreditations_img.jpg" alt="" /></li>
</ul>
 
</div>  
<div id="associations">
<h2>Associations</h2>

<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience.</p>
<ul class="associations_gallery">
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/associations_gallery_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/associations_gallery_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/associations_gallery_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/associations_gallery_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/associations_gallery_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/associations_gallery_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/associations_gallery_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/associations_gallery_img.jpg" alt="" /></li>
<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/associations_gallery_img.jpg" alt="" /></li>
</ul>

 
</div>        
        
      </div>
</div>



<div class="viewport section_8"> 
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/slideing-img.jpg"  alt="slideing-img" class="slidein slideing-img" />  </div>

<div class="viewport w60 section_9">
<div class="section9_col1">
  <h2>The ACH Difference</h2>
  <span class="separator"></span>
  <h4>Whether we're working with hospitality clients, schools, retirement providers</h4>
  <p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

<p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars to billions of dollars.</p>
<span class="separator"></span>
</div>
<div class="section9_col2">


<div class="owl-carousel owl-theme testmonial_slider">
            <div class="item">
            <h3>TESTIMONIALS</h3>
              <div class="project_name">PROJECT:
<span>RYDE HIGH SCHOOL</span></div>
<span class="client_name">Firstname Lastname</span>
<span class="designation">Position here</span>

<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

<p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
            </div>
            <div class="item">
            <h3>TESTIMONIALS</h3>
              <div class="project_name">PROJECT:
<span>RYDE HIGH SCHOOL</span></div>
<span class="client_name">Firstname Lastname</span>
<span class="designation">Position here</span>

<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

<p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
            </div>
            <div class="item">
            <h3>TESTIMONIALS</h3>
              <div class="project_name">PROJECT:
<span>RYDE HIGH SCHOOL</span></div>
<span class="client_name">Firstname Lastname</span>
<span class="designation">Position here</span>

<p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

<p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
            </div>
          </div>  


</div>
</div>

<div class="viewport w80 section_10 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/school_img1.jpg);background-position: center right;">
<div class="slider_caption_area">
<span class="slider_caption slidein">RYDE HIGH SCHOOL</span>
</div>
</div>
<div class="viewport w80 section_10 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/school_img2.jpg);background-position: center right;">
<div class="slider_caption_area">
<span class="slider_caption slidein">MAROUBRA HIGH SCHOOL</span>
</div>
</div>
<div class="viewport w80 section_10 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/school_img3.jpg);background-position: center right;">
<div class="slider_caption_area">
<span class="slider_caption slidein">WOY WOY HIGH SCHOOL</span>
</div>
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
          <h3>RYDE HIGH SCHOOL</h3>
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
    <div class="item " style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img2.jpg)"> <a href="#">
      <div class="item_des">
        <div class="item_title">
          <h3>RYDE HIGH SCHOOL</h3>
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
      
      
  </div>
</div>


<?php get_footer();
                                                                                                                                                                                        
