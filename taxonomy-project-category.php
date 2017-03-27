<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header('category');
?>

<div id="container" class="wrapper main">
    <div class="viewport w30 bg-cover" style="background-color:#fff;">
        <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . "/img/logo.png" ?>" alt="ACH Clifford" /></a></div>
    </div>
    <div class="viewport w70 bg-cover workingwithach_section2" style="background-image:url(<?php echo get_template_directory_uri() . "/img/workingwithach_img1.jpg" ?>); background-color: #0e1b28; background-position: center left;">

        <div class="workingwithach_title slidein">
            <?php the_archive_title('<h2 class="page-title">', '</h2>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </div>
    </div>

    <div class="viewport product_section" style="background-color:#fff;">
        <div class="product_area">
            <ul class="product_list">
                <?php 
                $termId = get_queried_object()->term_id;
                $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => -1,
                    'status' => 'published',
                    'orderby'   => 'post_title',
                    'order'     => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'project-category',
                            'field' => 'id',
                            'terms' => $termId,
                        ),
                    ),
                );
                $arrProjects = get_posts($args);
                if (!empty($arrProjects) && $arrProjects != NULL) { 
                    foreach ($arrProjects as $project) {
                        $project_link = get_permalink($project->ID);
                        $midiumImg = get_field("prj_category_image", $project->ID);
                        if($mediumImg) { ?>
                        <li>
                            <a href="<?php echo $project_link; ?>">
                                <img src="<?php echo $mediumImg ?>" class="lazy loaded">
                                <h4><?php echo $project->post_title ?></h4>
                            </a>
                        </li>
                        <?php } else { ?>
                        <li>
                            <a href="<?php echo $project_link; ?>">
                                <img src="http://placehold.it/484x640" class="lazy loaded">
                                <h4><?php echo $project->post_title ?></h4>
                            </a>
                        </li>
                        <?php } 
                    }
                }
?>
                
<?php /*                
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/img/product-1.jpg" ?>" class="lazy loaded">
                        <h4>Bidjar Highgate Enjoy</h4>
                        <span>tealblue / grey Silk<br> 
                            wool / silk </span>
                    </a>
                </li> */ ?>
            </ul>
        </div>

    </div>

    <?php
    get_footer();
    