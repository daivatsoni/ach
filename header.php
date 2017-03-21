<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="publisher" content="Daivat Soni <info@daivat.com>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="viewport" content="width=device-width" />

        <title>ACH Clifford</title>

        
        <link property="stylesheet" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/plugins.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/functions.min.js"></script>
		<script>
          $(function() {
            $( "#tabs" ).tabs();
          });
		  
		  $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 0,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items:1
                  }
                }
              })
            })
          </script>
        <!--[if IE]><![endif]-->
        <!--[if IE]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
  
        <script>
            (function (doc) {
                var viewport = doc.getElementById('viewport');
                if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/iPod/i)) {
                    viewport.setAttribute("content", "initial-scale=0.4, user-scalable=yes");
                } else if (navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/Android|Tablet/i)) {
                    viewport.setAttribute("content", "initial-scale=0.65, user-scalable=yes");
                }
            }(document));

            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        </script>
		
		<?php wp_head(); ?>
    </head>
    <body class="collection homepage">
    
    
    
        <?php
        if(!isset($_COOKIE["tutorial"])) :
        ?>
        <div class="tutorial-overlay-wrap">
          <div class="tutorial-overlay"> </div>
          <div class="tutorial-cycle">
            <div class="tutorial-mouse"> <svg version="1.1" id="mouse" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="59.528px" height="107.717px" viewBox="0 0 59.528 107.717" enable-background="new 0 0 59.528 107.717"
                         xml:space="preserve">
              <path id="frame1" fill="#ffffff" d="M29.764,107.717C13.352,107.717,0,94.364,0,77.952V29.764C0,13.352,13.352,0,29.764,0
                              s29.764,13.352,29.764,29.764v48.188C59.528,94.364,46.176,107.717,29.764,107.717z M29.764,2.835
                              c-14.849,0-26.929,12.08-26.929,26.929v48.188c0,14.85,12.08,26.931,26.929,26.931c14.849,0,26.93-12.081,26.93-26.931V29.764
                              C56.694,14.915,44.613,2.835,29.764,2.835z M29.764,16.984c-3.131,0-5.669,2.539-5.669,5.669v14.183
                              c0,3.131,2.539,5.669,5.669,5.669s5.669-2.539,5.669-5.669V22.654C35.433,19.523,32.895,16.984,29.764,16.984z"/>
              <path id="wheel" fill="#000000" d="M29.767,30.365c0,0.782-0.635,1.417-1.417,1.417s-1.417-0.635-1.417-1.417v-7.091
                              c0-0.783,0.635-1.417,1.417-1.417s1.417,0.635,1.417,1.417V30.365z"/>
              </svg>
              <div class="tutorial-text">please scroll <img src="<?php echo get_template_directory_uri() . "/img/dbl-arrow-nxt.png" ?>" alt="&raquo;" /></div>
            </div>
            <div class="tutorial-menu"> <svg version="1.1" id="browser" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="188.834px" height="114.834px" viewBox="0 0 188.834 114.834" enable-background="new 0 0 188.834 114.834"
                         xml:space="preserve">
              <path id="frame2" fill="#ffffff" d="M183.417,0h-178C2.43,0,0,2.43,0,5.417v104c0,2.987,2.43,5.417,5.417,5.417h178
                              c2.987,0,5.417-2.43,5.417-5.417v-104C188.834,2.43,186.405,0,183.417,0z M186,109.417c0,1.424-1.159,2.583-2.583,2.583h-178
                              c-1.424,0-2.583-1.159-2.583-2.583V41.666L32,12.501h154V109.417z M5.6,18.155h9.877c0.552,0,1,0.448,1,1s-0.448,1-1,1H5.6
                              c-0.552,0-1-0.448-1-1S5.047,18.155,5.6,18.155z M4.6,15.081c0-0.552,0.448-1,1-1h9.877c0.552,0,1,0.448,1,1s-0.448,1-1,1H5.6
                              C5.047,16.081,4.6,15.633,4.6,15.081z M5.6,22.23h9.877c0.552,0,1,0.448,1,1s-0.448,1-1,1H5.6c-0.552,0-1-0.448-1-1
                              S5.047,22.23,5.6,22.23z M186,9.666H2.835V5.417c0-1.424,1.158-2.583,2.583-2.583h178c1.424,0,2.583,1.158,2.583,2.583V9.666z"/>
              <path id="arrow" fill="#ffffff" d="M95.726,69.645c-0.37,0-0.726-0.206-0.899-0.562l-3.573-7.311l-3.914,3.555
                              c-0.293,0.267-0.717,0.334-1.077,0.174c-0.362-0.16-0.595-0.52-0.595-0.914V45.333c0-0.383,0.218-0.732,0.562-0.899
                              c0.343-0.168,0.754-0.125,1.054,0.112l15.214,11.926c0.312,0.244,0.45,0.649,0.353,1.033s-0.412,0.674-0.802,0.74l-5.181,0.881
                              l3.545,7.227c0.116,0.238,0.134,0.514,0.047,0.764c-0.086,0.252-0.268,0.458-0.506,0.574l-3.791,1.853
                              C96.023,69.613,95.873,69.645,95.726,69.645z"/>
              </svg>
              <div class="tutorial-text">or use the menu</div>
            </div>
          </div>
        </div>
        <?php endif; ?>

        <div class="progressbar">
            <div class="progress"></div>
        </div>
        <div class="scroll_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/menu_area_logo.png" class="menu_area_logo" height="80" width="140" alt="" /></a></div>
        
        <div class="menu-trigger"> <a href="#" class="menu-trigger-link"><span class="icon-reorder">&nbsp;</span></a> </div>
        
        <div class="menu">
            <div class="inner">
                <div class="content"> <a href="#" class="menu-trigger-close"></a>
                    <div class="collections keep-ratio__11">
                        <div class="inner">
                            <div id="ajax-menu" data='category'></div>
                        </div>
                    </div>

                    <nav class="nav_area">
                        <div class="menu_logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/menu_area_logo.png" class="menu_area_logo" alt="" /></a>
                        </div>

                        <?php wp_nav_menu( array('theme_location'=>'primary_menu', 'container'=>false, 'menu_class'=>false, 'walker'=> new ACH_menu_walker())); ?>
                        
                        <?php $socialMedia = get_field("social_media", "option");
                        if(!empty($socialMedia)) { ?> 
                        <ul class="social_icons">
                            <?php foreach($socialMedia as $media) { ?>
                            <li><a href="<?php echo $media['url']; ?>" target="_blank"><i class="fa <?php echo $media["fa_class"] ?>"></i></a></li>
                            <?php } // endforeach ?>
                        </ul>
                        <?php } // endif ?>
                    </nav>
                </div>
            </div>
        </div>
