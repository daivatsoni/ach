<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($categoryId)) {
    $args = array(
        'post_type' => 'project',
        'status' => 'published',
        'orderby'   => 'post_title',
        'order'     => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'project-category',
                'field' => 'id',
                'terms' => $categoryId,
            ),
        ),
    );
    $objProjects = get_posts($args);
} else {
    $objProjects = get_field("featured_projects", "options");
}
if(!empty($objProjects)) {

?>
<div class="viewport vertical-slider section_4"> <a href="#" class="carousel-control next"><i class="icon-angle-up"></i></a> <a href="#" class="carousel-control prev"><i class="icon-angle-down"></i></a>
    <div class="carousel">
        <?php
        foreach($objProjects as $project) { 
            $projectId = $project->ID;
            $thumbImage = get_field("proj_thumb_image",$projectId);
            $url = get_permalink($projectId);
            $title = get_the_title($projectId);
        ?>
        <div class="item " style="background-image:url(<?php echo esc_url($thumbImage['url']); ?>)"> 
            <a href="<?php echo $url; ?>">
                <div class="item_des">
                    <div class="item_title">
                        <h3><?php echo $title; ?></h3>
                    </div>
                </div>
            </a>
        </div>
        <?php } // end foreach ?>
    </div>
</div>
<?php 
} // endif