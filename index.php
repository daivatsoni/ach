<?php
get_header();
?>
<div id="container" class="wrapper main">
    <div class="viewport w30 bg-cover" style="background-color:#fff;">
        <?php $arrLogo = get_field("logo","options"); ?>
        <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo $arrLogo['url'] ?>" alt="<?php echo $arrLogo['alt'] ?>" /></a></div>
    </div>

    <div class="viewport w80 bg-cover homepage-2" style="background-image:url(<?php the_field("hp_1st_slide_background_image") ?>); background-color: #0e1b28; background-position: center right;">
    <!--<div class="viewport w70 slidein"><div class="homepage-2-overlay"></div></div>-->
        <?php /* <div class="topline slidein"><img src="http://cdn.jan-kath.com/dist/img/homepage/slide_02-text.png" alt="slide" /></div> */ ?>
        <div class="topline slidein"><?php the_field("hp_quotation"); ?></div>
        <?php /* <div class="collection-link slidein"><a class="arrow" href="/collection/erased_heritage/">View Collection</a></div> */ ?>
        
    </div>

    <div class="viewport w30 bg-cover section_3">
    <div class="box_middle">
        <div class="top25">

            <div class="white-orange-heading"><?php the_field("hp_sc2_white_heading") ?><br>
                <span><?php the_field("hp_sc2_orange_heading") ?></span>
            </div>
            <div class="scrollable_content_50yrs">
                <h3 class="subheading"><?php the_field("hp_sc2_subtitle") ?></h3>

                <div class="section_des">
                    <?php the_field("hp_sc2_content") ?>
                    <?php if($buttons = get_field("hp_sc2_buttons")){ ?><div class="btn"><?php foreach($buttons as $button) { ?><a href="#" class="<?php echo $button['class'] ?>"><?php echo $button['label'] ?></a> <?php } } ?></div>
                </div>
            </div>

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
                $mainClasses = "viewport w100 section_5 bg-cover";
            } elseif($i == (count($objDiagonalProjects)-1) ) {
                // Last slide
                $mainClasses = "viewport w100 bg-cover section_6 slide-blank";
            } else {
                // Middle slides
                $mainClasses = "viewport w100 bg-cover section_6";
            }
        
        ?>            
        <div class="<?php echo $mainClasses; ?>" style="background-image: url(<?php echo esc_url($thumbImage['url']); ?>);background-position: center left;">
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

    <div id="ach_difference" class="viewport w50 section_9">
        <h2><?php the_field("hp_ach_diff_heading"); ?></h2>
        <span class="separator"></span>
        <div class="scrollable_content">
            <h4><?php the_field("hp_ach_diff_sub_heading"); ?></h4>
            <?php the_field("hp_ach_diff_detail"); ?>
        </div>
        <?php /* <span class="separator"></span> */ ?>
    </div>

    <div class="viewport section_8" style=" background:#fff;"> 
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/slideing-img.jpg"  alt="slideing-img" class="slidein slideing-img" />
    </div>

    <div id="ourStory" class="viewport w80 section_9">
    
        <?php 
        $showStory = get_field("hp_story_show");
        $showHistory = get_field("hp_history_show");
        $showPolicy = get_field("hp_policy_show");
        $showAccredit = get_field("hp_accredit_show");
        $showAssoc = get_field("hp_assoc_show");
        if($showStory || $showHistory || $showPolicy || $showAccredit || $showAssoc) {
        ?>
        <div class="section9_col1">
            <div id="tabs" class="tab_content">
                <ul class="tab_button_set">
                    <?php if($showStory) { ?><li><a href="#aboutus"><?php the_field("hp_story_title"); ?></a></li> <?php } ?>
                    <?php if($showHistory) { ?><li><a href="#history"><?php the_field("hp_history_title"); ?></a></li><?php } ?>
                    <?php if($showPolicy) { ?><li><a href="#policies"><?php the_field("hp_policy_title"); ?></a></li><?php } ?>
                    <?php if($showAccredit) { ?><li><a href="#accreditations"><?php the_field("hp_accredit_title"); ?></a></li><?php } ?>
                    <?php if($showAssoc) { ?><li><a href="#associations"><?php the_field("hp_assoc_title"); ?></a></li><?php } ?>
                </ul>
                <?php if($showStory) { ?>
                <div id="aboutus">
                    <h2><?php the_field("hp_story_heading"); ?></h2> 
                    <div class="scrollable_content">
                    <?php the_field("hp_story_detail"); ?>
                    </div>
                </div>
                <?php } ?>
                <?php if($showHistory) { ?>
                <div id="history">
                    <h2><?php the_field("hp_history_heading"); ?></h2>
                    <div class="scrollable_content">
                    <?php the_field("hp_history_detail"); ?>
                    </div>
                </div>
                <?php } ?>
                <?php if($showPolicy) { ?>
                <div id="policies">
                    <h2><?php the_field("hp_policy_heading"); ?></h2>
                    <?php 
                    $isWhs = get_field("hp_policy_show_whs");
                    $isEnvironment = get_field("hp_policy_show_environment");
                    $isQuality = get_field("hp_policy_show_quality");
                    if($isWhs || $isEnvironment || $isQuality) { ?>
                    <div class="scrollable_content">
                        <?php the_field("hp_policy_detail"); ?>
                        <div id="tabs2" class="tabs tab_content">
                            <ul class="inner_tab_button_set">
                                <?php if($isWhs) { ?><li><a href="#whs">WHS</a></li> <?php } ?>
                                <?php if($isEnvironment) { ?><li><a href="#environment">Environment</a></li><?php } ?>
                                <?php if($isQuality) { ?><li><a href="#quality">Quality</a></li><?php } ?>
                            </ul>
                            <?php if($isWhs) { ?>
                            <div id="whs">

                                <?php the_field("hp_policy_whs_content"); ?>

                            </div>
                            <?php } ?>
                            <?php if($isEnvironment) { ?>
                            <div id="environment">

                                <?php the_field("hp_policy_environment_content"); ?>

                            </div>
                            <?php } ?>
                            <?php if($isQuality) { ?>
                            <div id="quality">

                                <?php the_field("hp_policy_quality_content"); ?>

                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } else { 
                        the_field("hp_policy_detail");
                    } ?>
                    
                </div>  
                <?php } ?>
                <?php if($showAccredit) { ?>
                <div id="accreditations">
                    <h2><?php the_field("hp_accredit_heading"); ?></h2>
                    <div  class="scrollable_content">
                    <?php the_field("hp_accredit_detail"); ?>
                    </div>
                </div>  
                <?php } ?>
                <?php if($showAssoc) { ?>
                <div id="associations">
                    <h2><?php the_field("hp_assoc_heading"); ?></h2>
                    <div class="scrollable_content">
                    <?php the_field("hp_assoc_detail"); ?>
                    </div>
                </div>    
                <?php } ?>

            </div>
        </div>
        <?php }
        ?>
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
            $title = strip_tags(get_field("proj_hp_heading", $projectId));
        ?>            
        <div class="viewport w80 section_10 bg-cover <?php echo $project->post_name;?>" style="background-image: url(<?php echo esc_url($thumbImage['url']); ?>);background-position: center right;">
            <div class="slider_caption_area">
                <a href="<?php echo $url; ?>" class="slider_caption slidein"><?php echo $title; ?></a>
            </div>
        </div>
        <?php 
        } // endforeach 
    } // endif 
    ?>
     
    
    <?php get_template_part( 'template-parts/verticle-slider' ); ?>

    <script type="text/javascript">
        $(document).ready(function() {
            changeSection = function() {
                var tabName = window.location.hash.substr(1);
                if(tabName == "contactus") {
                    var leftPos = $("#footer").offset().left;
                    console.log(leftPos);
                    $('html, body').animate({
                        scrollLeft: (leftPos - 100)
                    },'slow');
                }
                if(tabName == "ach_difference") {
                    var leftPos = $("#ach_difference").offset().left;
                    $('html, body').animate({
                        scrollLeft: (leftPos - 100)
                    },'slow');
                }
            };
            setTimeout(changeSection, 1000);
        });
    </script>
    
    <?php
    get_footer();

    