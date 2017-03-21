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
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/img/product-1.jpg" ?>" class="lazy loaded">
                        <h4>Bidjar Highgate Enjoy</h4>
                        <span>tealblue / grey Silk<br> 
                            wool / silk </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/img/product-1.jpg" ?>" class="lazy loaded">
                        <h4>Bidjar Highgate Enjoy</h4>
                        <span>tealblue / grey Silk<br> 
                            wool / silk </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/img/product-1.jpg" ?>" class="lazy loaded">
                        <h4>Bidjar Highgate Enjoy</h4>
                        <span>tealblue / grey Silk<br> 
                            wool / silk </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/img/product-1.jpg" ?>" class="lazy loaded">
                        <h4>Bidjar Highgate Enjoy</h4>
                        <span>tealblue / grey Silk<br> 
                            wool / silk </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/img/product-1.jpg" ?>" class="lazy loaded">
                        <h4>Bidjar Highgate Enjoy</h4>
                        <span>tealblue / grey Silk<br> 
                            wool / silk </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/img/product-1.jpg" ?>" class="lazy loaded">
                        <h4>Bidjar Highgate Enjoy</h4>
                        <span>tealblue / grey Silk<br> 
                            wool / silk </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . "/img/product-1.jpg" ?>" class="lazy loaded">
                        <h4>Bidjar Highgate Enjoy</h4>
                        <span>tealblue / grey Silk<br> 
                            wool / silk </span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

<?php /*
    <div class="viewport w50 workingwithach_section4 bg-cover" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) . "/img/workingwithach_img2.png" ?>);background-position: center right;">

    </div>
    <div class="viewport w100 workingwithach_section5 bg-cover" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) . "/img/workingwithach_img3.jpg" ?>);background-position: center right;">

    </div>

*/ ?>

    <?php
    get_footer();
    