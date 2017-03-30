<?php
/* Template Name: WORKING AT ACH */
get_header();
?>
<div id="container" class="wrapper main">
    <div class="viewport w30 bg-cover" style="background-color:#fff;">
        <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . "/img/logo.png" ?>" alt="ACH Clifford" /></a></div>
    </div>
    <?php  
    /* Start the Loop */
    while ( have_posts() ) : the_post();
    ?>
    <div class="viewport w60 bg-cover workingwithach_section2" style="background-image:url(<?php the_field("waa_heading_background"); ?>); background-color: #0e1b28; background-position: center left;">

        <div class="workingwithach_title slidein">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>


    <div id="screen1" class="viewport w80 workingwithach_section3 workingatach_section1 section_9" style="background-color:#fff;">
        <div class="section9_col1">
            <h2><?php the_field("waa_scr1_heading"); ?></h2>
            <h4><?php the_field("waa_scr1_subheading"); ?></h4>
            <?php the_field("waa_scr1_content"); ?>
            <a id="show-position" href="javascript:void(0);" class="register_button"><?php the_field("waa_button_text"); ?></a>
        </div>
        <div class="section9_col2 testmonial_slider_area">

            <?php
            $htmlInputRadio = "";
            $htmlLi = "";
            $htmlLabel = "";
            $i=1;
            $careerProfiles = get_field("waa_career_profiles");
            if(!empty($careerProfiles)) {
                foreach ($careerProfiles as $profile) {
                    if($i === 1) {
                        $htmlInputRadio .= '<input type="radio" name="slides" id="slides_'.$i.'" checked />';
                    } else if($i === count($careerProfiles)) {
                        $htmlInputRadio .= '<input type="radio" name="slides" id="slides_N" />';
                    } else {
                        $htmlInputRadio .= '<input type="radio" name="slides" id="slides_'.$i.'" />';
                    }
                    
                $htmlLi .='<li>
                        <div class="item">
                        <h3>CAREER <br />
                            PROFILES</h3>
                        <img src="'.$profile['image'].'" class="career_profile_img" />
                        <span class="client_name">'.$profile['firstname'].' '.$profile['lastname'].'</span>
                        <span class="designation">'.$profile['position'].'</span>
                        '.$profile['description'];
                        $htmlLi .= '</div></li>';
                        
                if($i === count($careerProfiles)) {
                    $htmlLabel .= '<label for="slides_N"></label>';
                } else {
                    $htmlLabel .= '<label for="slides_'.$i.'"></label>';
                }
                $i++;
            } ?>
            <div class="csslider testmonial_slider">
                <?php echo $htmlInputRadio; ?>
                <ul>
                    <?php echo $htmlLi; ?>
                </ul>

                <div class="arrows">
                    <?php echo $htmlLabel; ?>
                </div>
            </div>
            <?php } ?>


<?php /*
            <div class="owl-carousel owl-theme testmonial_slider">
                <?php 
                $careerProfiles = get_field("waa_career_profiles");
                if(!empty($careerProfiles)) {
                    foreach ($careerProfiles as $profile) { ?>
                <div class="item">
                    <h3>CAREER <br />
                        PROFILES</h3>
                    <img src="<?php echo $profile['image']; ?>" class="career_profile_img" />
                    <span class="client_name"><?php echo $profile['firstname']; ?><?php echo ($profile['lastname'])?" ".$profile['lastname']:""; ?></span>
                    <span class="designation"><?php echo $profile['position']; ?></span>
                    <?php echo $profile['description']; ?>
                </div>
                <?php
                    }
                }
                ?>
            </div>
      */  ?>
        </div>
    </div>
    
    <div id="screen2" class="viewport w80 workingwithach_section3 positions_section1 section_9" style="background-color:#fff;display:none;">
        <h2><?php the_field("waa_cp_heading"); ?> <a id="close-position" href="javascript:void(0);" class="current_positions_close">CLOSE</a></h2>
        <?php 
        $currentPositions = get_field("waa_current_positions");
        if(!empty($currentPositions)) {
        ?>
        <ul class="current_positions_list">
            <?php 
            foreach($currentPositions as $position) { ?>
            <li>
                <h5><?php echo $position["title"]; ?></h5>
                <div class="positions_list_content"><a href="mailto:<?php echo $position["email_to"]; ?>?subject=<?php echo $position["email_subject"]; ?>" class="apply_button">APPLY</a><?php echo $position["job_description"]; ?><?php if(strlen(trim($position["more_detail"]))) { ?><a href="<?php echo $position["more_detail"]; ?>" target="_blank">View full job description</a><?php } ?></div>
            </li>
            <?php 
            } ?>
        </ul>
        <?php
        } ?>
    </div>
    
    
    <div class="viewport w50 workingwithach_section4 bg-cover" style="background-image: url(<?php the_field("waa_last_image1"); ?>);background-position: center left;">

    </div>
    <div class="viewport w100 workingwithach_section5 bg-cover" style="background-image: url(<?php the_field("waa_last_image2"); ?>);background-position: center left;">

    </div>

    <?php
    endwhile;
    
    get_footer();