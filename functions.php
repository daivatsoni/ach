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
        <div class="collection ">
            <a href="/collection/erased_heritage/">
                <div class="inner" style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_erased_heritage.jpg)">
                    <h3>Erased Heritage</h3>
                </div>
            </a>
        </div>
        <div class="collection ">
            <a href="/collection/from_russia_with_love/">
                <div class="inner" style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_from_russia_with_love.jpg)">
                    <h3>From Russia<br>With Love</h3>
                </div>
            </a>
        </div>
        <div class="collection ">
            <a href="/collection/spacecrafted/">
                <div class="inner" style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_spacecrafted.jpg)">
                    <h3>Space&shy;crafted</h3>
                </div>
            </a>
        </div>
        <div class="collection ">
            <a href="/collection/artwork/">
                <div class="inner" style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_artwork.jpg)">
                    <h3>Artwork</h3>
                </div>
            </a>
        </div>
        <div class="collection ">
            <a href="/collection/heiter_bis_wolkig/">
                <div class="inner" style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_heiter_bis_wolkig.jpg)">
                    <h3>Heiter bis Wolkig</h3>
                </div>
            </a>
        </div>
        <div class="collection ">
            <a href="/collection/lost_weave/">
                <div class="inner" style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_lost_weave.jpg)">
                    <h3>Lost Weave</h3>
                </div>
            </a>
        </div>
        <div class="collection next">
            <div data-page="2" class="inner page next">
                <a href="#" class="page next">further<br>collections</a>
            </div>
        </div>
    </div><?php
    $html = ob_get_clean();
    echo $html;
    exit;
}
