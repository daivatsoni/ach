<?php
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate( &$scripts) {
  if(!is_admin()) {
    $scripts->remove( 'jquery');
//    $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.11.3' );
  }
}

add_action( 'wp_head', 'my_script_enqueuer' );

function my_script_enqueuer() {
    wp_localize_script( 'my_ajax_script', 'myAjax', array( 'ach_ajaxurl' => admin_url( 'admin-ajax.php' )));        
}

add_action('wp_ajax_getMenuItems', 'getMenuItems');
add_action('wp_ajax_nopriv_getMenuItems', 'getMenuItems');

function getMenuItems() {
    // get project categories thumb, title and URL
    
    $html = ob_start();
    ?><div id="menu">
        <div class="collection">
            <a href="#">
                <div class="inner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img3.jpg)">
                    <h3>EDUCATION</h3>
                </div>
            </a>
        </div>
        <div class="collection">
            <a href="#">
                <div class="inner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img3.jpg)">
                    <h3>AGED/DISABILITY CARE</h3>
                </div>
            </a>
        </div>
        <div class="collection">
            <a href="#">
                <div class="inner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img3.jpg)">
                    <h3>COMMUNITY</h3>
                </div>
            </a>
        </div>
        <div class="collection">
            <a href="#">
                <div class="inner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img3.jpg)">
                    <h3>REFURB / FITOUT</h3>
                </div>
            </a>
        </div>
        <div class="collection">
            <a href="#">
                <div class="inner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img3.jpg)">
                    <h3>HERITAGE</h3>
                </div>
            </a>
        </div>
        <div class="collection">
            <a href="#">
                <div class="inner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel_slider_img3.jpg)">
                    <h3>HEALTH</h3>
                </div>
            </a>
        </div>
        
        <div class="collection withoutimg">
            <a href="#">
                <div class="inner">
                    <h3>NEWS</h3>
                </div>
            </a>
        </div>
        
        
        <div class="collection withoutimg">
            <a href="#">
                <div class="inner">
                    <h3>CAREERS</h3>
                </div>
            </a>
        </div>
        <div class="collection withoutimg">
            <a href="#">
                <div class="inner">
                    <h3>CONTACT US</h3>
                </div>
            </a>
        </div>
        
        
    </div><?php
    $html = ob_get_clean();
    echo $html;
    exit;
}
