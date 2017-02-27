<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="publisher" content="Daivat Soni <info@daivat.com>">
        <meta id="viewport" name="viewport">

        <title>ACH Clifford</title>

        <?php wp_head(); ?>
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
    </head>
    <body class="collection homepage">
