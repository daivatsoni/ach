<?php
/* Template Name: ACH EXPRESS */
get_header();
?>
<div id="container" class="wrapper main">
    <div class="viewport w30 bg-cover" style="background-color:#fff;">
        <?php $logoImage = get_field("logo","options"); ?>
        <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo $logoImage['url'] ?>" alt="<?php echo $logoImage['alt'] ?>" /></a></div>
    </div>
    <?php  
    /* Start the Loop */
    while ( have_posts() ) : the_post();
    ?>
    <div class="viewport w60 bg-cover workingwithach_section2" style="background-image:url(<?php the_field("exp_heading_background"); ?>); background-color: #0e1b28; background-position: center left;">

        <div class="workingwithach_title slidein">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>

    <div class="viewport w100 workingwithach_section3 section_9" style="background-color:#fff;">

        <div class="section9_col1">
            <h2><?php the_field("exp_heading"); ?></h2>
            <h4><?php the_field("exp_subheading"); ?></h4>
            <div class="scrollable_content">
                <?php the_field("exp_description"); ?>
                <a id="show-form" href="javascript:void(0);" class="register_button"><?php the_field("exp_button_label"); ?></a>
            </div>
        </div>
        <div id="wwa-testimonials" class="section9_col2 testmonial_slider_area">
            <h3>TESTIMONIALS</h3>
            <?php
            $wwaTestimonials = get_field("exp_testimonials");
            if (!empty($wwaTestimonials))
                echo wwa_get_testimonial_slider($wwaTestimonials, -1);
            else
                echo wwa_get_testimonial_slider();
            ?>
        </div>
        <div id="wwa_form" class="section9_col2" style="display:none;">
            <?php $formCode = get_field("exp_form_code"); ?>
            <div class="contact_form"><?php echo do_shortcode($formCode); ?></div>
        </div>
    </div>
    <div class="viewport w50 workingwithach_section4 bg-cover" style="background-image: url(<?php the_field("exp_first_image"); ?>);background-position: center left;"></div>
    <?php 
    $galleryImages = get_field("gallery");
    if(count($galleryImages)) {
        foreach($galleryImages as $image) { ?>
            <div class="viewport w100 workingwithach_section5 bg-cover" style="background-image: url(<?php echo $image['url']; ?>);background-position: center right;"></div>
    <?php }
    }
    ?>

    <?php
    endwhile;
    
    get_footer();

    