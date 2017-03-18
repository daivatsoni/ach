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

    <?php get_template_part( 'template-parts/verticle-slider' ); ?>

    <?php
    // DIAGONAL CUT PROJECT DISPLAY
    $objDiagonalProjects = get_field("hp_prj_diagonal_cut");
    if(!empty($objDiagonalProjects)) { 
        $i=0;
        foreach($objDiagonalProjects as $project) { 
            $projectId = $project->ID;
            $thumbImage = get_field("prj_diagonal_cut_image",$projectId);
            $url = get_permalink($projectId);
            $title = get_field("proj_hp_heading", $projectId);
            $logoImage = get_field('proj_logo_image', $projectId);
            
            if($i < 1) {
                // first slide
                $mainClasses = "viewport w80 section_5 bg-cover";
            } elseif($i == (count($objDiagonalProjects)-1) ) {
                // Last slide
                $mainClasses = "viewport w100 bg-cover section_6 slide-blank";
            } else {
                // Middle slides
                $mainClasses = "viewport w80 bg-cover section_6";
            }
        ?>            
        <div class="<?php echo $mainClasses; ?>" style="background-image: url(<?php echo esc_url($thumbImage['url']); ?>);background-position: center right;">
            <div class="slider_caption_area">
                <a href="<?php echo $url; ?>" class="slider_caption slidein"><?php echo $title; ?></a>
                <?php if(!empty($logoImage)) { ?> 
                <img src="<?php echo esc_url($logoImage['url']); ?>" width="236" height="100" alt="<?php echo $logoImage['alt']; ?>" class="zoo_logo" /> 
                <?php } ?>
            </div>
        </div>
    <?php 
        $i++;
        } // endforeach
    } // endif 
    ?>

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
        
        <?php if(get_field("hp_show_testimonials")) { ?>
        <div class="section9_col2 testmonial_slider_area">

            <h3><?php the_field("hp_tsm_heading") ?></h3>
            <?php 
            $arrTestimonials = get_field('hp_testimonials');
            if(!empty($arrTestimonials)) 
                echo get_testimonial_slider($arrTestimonials, -1);
            else 
                echo get_testimonial_slider();
            ?>
        </div>
        <?php } // endif ?>
    </div>
    
    <?php
    // NORMAL CUT PROJECT DISPLAY
    $objNormalProjects = get_field("hp_prj_normal_cut");
    if(!empty($objNormalProjects)) { 
        foreach($objNormalProjects as $project) { 
            $projectId = $project->ID;
            $thumbImage = get_field("prj_diagonal_cut_image",$projectId);
            $url = get_permalink($projectId);
            $title = get_field("proj_hp_heading", $projectId);
        ?>            
        <div class="viewport w80 section_10 bg-cover" style="background-image: url(<?php echo esc_url($thumbImage['url']); ?>);background-position: center right;">
            <div class="slider_caption_area">
                <a href="<?php echo $url; ?>" class="slider_caption slidein"><?php echo $title; ?></a>
            </div>
        </div>
        <?php 
        } // endforeach 
    } // endif ?>

    <?php get_template_part( 'template-parts/verticle-slider' ); ?>

    <?php
    get_footer();

    