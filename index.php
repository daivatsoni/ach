<?php
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
        <?php $arrLogo = get_field("logo","options"); ?>
        <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo $arrLogo['url'] ?>" alt="<?php echo $arrLogo['alt'] ?>" /></a></div>
    </div>

    <div class="viewport w70 bg-cover homepage-2" style="background-image:url(<?php the_field("hp_1st_slide_background_image") ?>); background-color: #0e1b28; background-position: center left;">
        <?php /* <div class="topline slidein"><img src="http://cdn.jan-kath.com/dist/img/homepage/slide_02-text.png" alt="slide" /></div> */ ?>
        <div class="topline slidein"><?php the_field("hp_quotation"); ?></div>
        <?php /* <div class="collection-link slidein"><a class="arrow" href="/collection/erased_heritage/">View Collection</a></div> */ ?>
    </div>

    <div class="viewport w30 bg-cover section_3">
        <div class="top25">

            <div class="white-orange-heading"><?php the_field("hp_sc2_white_heading") ?><br>
                <span><?php the_field("hp_sc2_orange_heading") ?></span>
            </div>
            <h3 class="subheading"><?php the_field("hp_sc2_subtitle") ?></h3>

            <div class="section_des">
                <?php the_field("hp_sc2_content") ?>
                <?php if($buttons = get_field("hp_sc2_buttons")){ ?><div class="btn"><?php foreach($buttons as $button) { ?><a href="<?php echo $button['url'] ?>"><?php echo $button['label'] ?></a> <?php } } ?></div>
            </div>

        </div>
    </div>

    <div class="viewport vertical-slider section_4"> <a href="#" class="carousel-control next"><i class="icon-angle-up"></i></a> <a href="#" class="carousel-control prev"><i class="icon-angle-down"></i></a>
        <div class="carousel">

            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img1.jpg)"> 
                <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img2.jpg)"> <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a> </div>
            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img3.jpg)"> <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a> </div>
            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img2.jpg)"> <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a> </div>
            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img3.jpg)"> <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a> </div>


        </div>
    </div>
    <!--test -->



    <div class="viewport w80 section_5 bg-cover" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/slide-1.png);background-position: center right;">
        <div class="slider_caption_area">
            <a href="#" class="slider_caption slidein">NGALLU WAL - DOONSIDE<br />
                ABORIGINAL MEDICAL CENTER</a>
        </div>

    </div>

    <div class="viewport w80 bg-cover section_6" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/slide-2.png); background-position: center left;">

        <div class="slider_caption_area">
            <a href="#" class="slider_caption slidein">TARONGA ZOO<br />
                TREE KANGAROO EXHIBIT</a>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/zoo_logo.png" width="236" height="100" alt="zoo_logo" class="zoo_logo" /> </div> 

    </div>

    <div class="viewport w100 bg-cover section_6 slide-blank" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/slide-3.png);background-position: center left;">

        <div class="slider_caption_area">
            <a href="#" class="slider_caption slidein" style=" line-height:42px;">STANMORE PUBLIC SCHOOL</a>
        </div>

    </div>


    <!--test -->
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
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/accreditations_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/accreditations_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/accreditations_img.jpg" alt="" /></li>
                </ul>

            </div>  
            <div id="associations">
                <h2>Associations</h2>

                <p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience.</p>
                <ul class="associations_gallery">
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/associations_gallery_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/associations_gallery_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/associations_gallery_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/associations_gallery_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/associations_gallery_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/associations_gallery_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/associations_gallery_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/associations_gallery_img.jpg" alt="" /></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/associations_gallery_img.jpg" alt="" /></li>
                </ul>


            </div>        

        </div>
    </div>

    <div class="viewport section_8"> 
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/slideing-img.jpg"  alt="slideing-img" class="slidein slideing-img" />  </div>

    <div class="viewport w60 section_9">
        <div class="section9_col1">
            <h2>The ACH Difference</h2>
            <span class="separator"></span>
            <h4>Whether we're working with hospitality clients, schools, retirement providers</h4>
            <p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

            <p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars to billions of dollars.</p>
            <span class="separator"></span>
        </div>
        <div class="section9_col2 testmonial_slider_area">

            <h3>TESTIMONIALS</h3>
            <div class="owl-carousel owl-theme testmonial_slider">
                <div class="item">
                    <div class="project_name">PROJECT:
                        <span>RYDE HIGH SCHOOL</span></div>
                    <span class="client_name">Firstname Lastname</span>
                    <span class="designation">Position here</span>

                    <p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

                    <p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
                </div>
                <div class="item">
                    <div class="project_name">PROJECT:
                        <span>RYDE HIGH SCHOOL</span></div>
                    <span class="client_name">Firstname Lastname</span>
                    <span class="designation">Position here</span>

                    <p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>

                    <p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
                </div>
                <div class="item">
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

    <div class="viewport w80 section_10 bg-cover" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/school_img1.jpg);background-position: center right;">
        <div class="slider_caption_area">
            <a href="#" class="slider_caption slidein">RYDE HIGH SCHOOL</a>
        </div>
    </div>

    <div class="viewport w80 section_10 bg-cover" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/school_img2.jpg);background-position: center right;">
        <div class="slider_caption_area">
            <a href="#" class="slider_caption slidein">MAROUBRA HIGH SCHOOL</a>
        </div>
    </div>

    <div class="viewport w80 section_10 bg-cover" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/school_img3.jpg);background-position: center right;">
        <div class="slider_caption_area">
            <a href="#" class="slider_caption slidein">WOY WOY HIGH SCHOOL</a>
        </div>
    </div>

    <div class="viewport vertical-slider section_4"> <a href="#" class="carousel-control next"><i class="icon-angle-up"></i></a> <a href="#" class="carousel-control prev"><i class="icon-angle-down"></i></a>
        <div class="carousel">

            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img1.jpg)"> 
                <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img2.jpg)"> <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a> </div>
            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img3.jpg)"> <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a> </div>
            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img2.jpg)"> <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a> </div>
            <div class="item " style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/img/carousel_slider_img3.jpg)"> <a href="#">
                    <div class="item_des">
                        <div class="item_title">
                            <h3>RYDE HIGH SCHOOL</h3>
                        </div>
                    </div>
                </a> </div>


        </div>
    </div>


    <?php
    get_footer();

    