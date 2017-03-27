<?php
//get_header('category');
get_header();
?>
<div id="container" class="wrapper main">
<?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();
?>
    
    <div class="viewport w30 bg-cover" style="background-color:#fff;">
        <?php $arrLogo = get_field("logo","options"); ?>
        <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo $arrLogo['url'] ?>" alt="<?php echo $arrLogo['alt'] ?>" /></a></div>
    </div>
    <?php $projectGallery = get_field("prj_images"); 
    $firstBG = "";
    if(!empty($projectGallery) && isset($projectGallery[0])) {
        $firstBG = $projectGallery[0]['url'];
    }
    ?>
    <div class="viewport w60 bg-cover rydehighsecholl_section2" style="background-image:url(<?php echo $firstBG ?>); background-color: #0e1b28; background-position: center left;">
        <div class="rydehighsecholl_title slidein">
            <h2><?php echo get_the_title(); ?></h2>
            <?php $term_list = wp_get_post_terms(get_the_ID(), 'project-category', array("fields" => "names")); ?>
            <h3><?php echo implode(",", $term_list); ?></h3>
        </div>
    </div>

    <?php 
    if(!empty($projectGallery) && isset($projectGallery[1])) { 
        for($i=1; $i<count($projectGallery); $i++) { ?>
    
        <div class="viewport w100 section_5 bg-cover" style="background-image: url(<?php echo $projectGallery[$i]['url'] ?>);background-position: center right;"></div>
    
        <?php         
        }  // endfor
    } // endif gallery ?>
<?php endwhile; ?>    

    <?php 
    $term_list = wp_get_post_terms(get_the_ID(), 'project-category');
    $categoryId = $term_list[0]->term_id;
    include(locate_template( 'template-parts/verticle-slider.php' )); ?>

    <?php
    get_footer("project");
    