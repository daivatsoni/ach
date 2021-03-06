<?php
get_header();
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
<div class="progressbar">
  <div class="progress"></div>
</div>
<div class="menu-trigger"> <a href="#" class="menu-trigger-link"><span class="icon-reorder">&nbsp;</span></a> </div>
<div class="menu">
  <div class="inner">
    <div class="content"> <a href="#" class="menu-trigger-close"><span class="rotate45 icon-plus">&nbsp;</span></a>
      <div class="collections keep-ratio__11">
        <div class="inner">
          <div id="ajax-menu"></div>
        </div>
      </div>
      <nav>
        <ul>
          <li class="home"><a href="/">Home</a></li>
          <li>
            <div class="accordion">
              <h3>About Us</h3>
              <div>
                <div class="inner"> <a href="/company/designer-and-company/">&rsaquo; Designer &amp; Company</a><br>
                  <a href="/company/quality-and-manufacturing/">&rsaquo; Quality &amp; Manufacturing</a><br>
                  <a href="/company/sustainability-and-fairtrade/">&rsaquo; Sustainability &amp; Fairtrade</a><br>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="accordion">
              <h3>Showrooms &amp; Stores</h3>
              <div>
                <div class="inner"> <a href="/showrooms/bochum/">&rsaquo; Bochum Headquarters</a><br>
                  <a href="/showrooms/berlin/">&rsaquo; Berlin</a><br>
                  <a href="/showrooms/cologne/">&rsaquo; Cologne</a><br>
                  <a href="/showrooms/stuttgart/">&rsaquo; Stuttgart</a><br>
                  <a href="/showrooms/new-york/">&rsaquo; New York</a><br>
                  <a href="/showrooms/hamburg/">&rsaquo; Hamburg</a><br>
                  <a href="/showrooms/miami/">&rsaquo; Miami</a><br>
                  <a href="/showrooms/munich/">&rsaquo; Munich</a><br>
                  <a href="/showrooms/vancouver/">&rsaquo; Vancouver</a><br>
                  <br>
                  <a href="/global-distribution/">&rsaquo; Global Distribution</a><br>
                </div>
              </div>
            </div>
          </li>
          <li><a href="/press-and-media/overview/">Press &amp; Media &nbsp; EN | DE | FR | CN</a></li>
          <li><a href="/imprint/">Imprint</a></li>
          <li class="activateSearch">
            <form enctype="multipart/form-data" method="post" action=".">
              <div class="searchfield menu-search cf">
                <input type="text" autocomplete="off" name="query" class="query" value="" placeholder="Rug Name" />
                <input type="submit" class="searchSubmit" value="Search A Rug" />
              </div>
              <div class="cf searchKompleter"></div>
            </form>
          </li>
        </ul>
        <ul class="bottomMenu">
          <li><a href="https://www.facebook.com/pages/Jan-Kath-Contemporary-rug-art/201727976205" target="_blank">FOLLOW US ON FACEBOOK</a></li>
          <li><a href="https://itunes.apple.com/de/app/jan-kath/id1060974872" target="_blank">VIRTUAL EXPERIENCE</a></li>
          <li> <a class="app-store" title="Jan Kath in AppStore" target="_blank" href="https://itunes.apple.com/tm/app/jan-kath-iphone/id1060974872"> <img style="width: 100px;" alt="Download in App-Store" src="http://cdn.jan-kath.com/dist/img/app-store-logo-transparent.png" /> </a> <a class="app-store" style="position: absolute; top: 81px; left: 110px;" href="https://play.google.com/store/apps/details?id=com.IvyMobi.IC"> <img alt="Download on the Play Store" src="http://cdn.jan-kath.com/img/play.png"> </a> </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
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
  <div class="logo"><img src="<?php echo get_template_directory_uri()."/img/logo.png" ?>" alt="ACH Clifford" /></div>
</div>
<div class="viewport w70 bg-cover homepage-2" style="background-image:url(<?php echo get_template_directory_uri() . "/img/slides/hpslide2.jpg" ?>); background-color: #0e1b28; background-position: center right;">
  <?php /* <div class="topline slidein"><img src="http://cdn.jan-kath.com/dist/img/homepage/slide_02-text.png" alt="slide" /></div> */ ?>
  <div class="topline slidein">Realising an architectural vision<br/>
    takes passion, commitment,<br/>
    and unwavering attention<br/>
    to detail.</div>
  <?php /* <div class="collection-link slidein"><a class="arrow" href="/collection/erased_heritage/">View Collection</a></div> */ ?>
</div>
<div class="viewport w30 bg-cover section_3">
  <div class="top25">
  
    <div class="white-orange-heading">50 YEARS<br>
      <span>STRONG</span>
      </div>
    <h3 class="subheading">We build for life.</h3>
    
    <div class="section_des">
      <p>Whether we're working with hospitality clients, schools, retirement providers, multi-site operators, architects or investors, our approach enhances every project and makes it an impressive experience – for everyone.</p>
      <p>We are specialists in commercial construction and refurbishment in Sydney, Brisbane, Melbourne and surrounding regions, bringing deeper understanding to projects ranging from tens of thousands of dollars to tens of millions of dollars.</p>
    <div class="btn"> <a href="#">About Us</a> <a href="#">View Projects</a> </div>
    </div>
    
  </div>
</div>
<div class="viewport vertical-slider section_4"> <a href="#" class="carousel-control next"><i class="icon-angle-up"></i></a> <a href="#" class="carousel-control prev"><i class="icon-angle-down"></i></a>
  <div class="carousel">
  
    <div class="item " style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_erased_heritage.jpg)"> 
    <a href="/collection/erased_heritage/">
      <div class="item_des">
        <div class="item_title">
          <h3>Erased Heritage</h3>
        </div>
      </div>
      </a>
       </div>
    <div class="item " style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_jungle.jpg)"> <a href="/collection/jungle/">
      <div class="item_des">
        <div class="item_title">
          <h3>Jungle</h3>
        </div>
      </div>
      </a> </div>
	<div class="item " style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_spacecrafted.jpg)"> <a href="/collection/spacecrafted/">
      <div class="item_des">
        <div class="item_title">
          <h3>Spacecrafted</h3>
        </div>
      </div>
      </a> </div>
    <div class="item " style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_jiangxi.jpg)"> <a href="/collection/jiangxi/">
      <div class="item_des">
        <div class="item_title">
          <h3>Jiangxi</h3>
        </div>
      </div>
      </a> </div>
    <div class="item " style="background-image:url(http://cdn.jan-kath.com/dist/img/collection/menu_from_russia_with_love.jpg)"> <a href="/collection/from_russia_with_love/">
      <div class="item_des">
        <div class="item_title">
          <h3>From Russia With Love</h3>
        </div>
      </div>
      </a> </div>
      
      
  </div>
</div>

<div class="viewport w80 section_5 bg-cover" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide-1.png);background-position: center right;">
<div class="slider_caption_area">
<span class="slider_caption">NGALLU WAL - DOONSIDE<br />
ABORIGINAL MEDICAL CENTER</span>
</div>

</div>

<div class="viewport w80 bg-cover section_6" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide-2.png); background-position: center right;">
  <div class="topline slidein"><img src="http://cdn.jan-kath.com/dist/img/homepage/slide_04-text.png" alt="slide" /></div>
  <div class="collection-link slidein"><a class="arrow" href="/collection/from_russia_with_love/">View Collection</a></div>
</div>


<div class="viewport w80 bg-cover section_6" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/slide-3.png);background-position: center left;">
  <div class="collection-link slidein"><a class="arrow" href="/collection/spacecrafted/">View Collection</a></div>
</div>




<div class="viewport w60 homepage-6 bg-cardboard infotext the-designer">
  <div class="slidein cell">
    <div class="headline bigger versal pink">The<br>
      Designer</div>
    <div class="subtext lined black non-versal"> <a href="/company/designer-and-company/"> <strong class="pink versal">You can be cool while still keeping your feet warm!</strong><br>
      <br>
      With his modern designs, Jan Kath (born 1972) is creating a completely new perspective on carpets. Guided by a bold approach in his work, Kath, originally from Bochum, combines classical elements of Oriental carpets with contemporary, minimalist design. <strong class="pink">››</strong> </a> </div>
  </div>
</div>
<div class="viewport homepage-7 bg-cardboard"> <img class="slidein" src="http://cdn.jan-kath.com/dist/img/homepage/the-designer.png" alt="Jan Kath — The Designer"> </div>
<div class="viewport w120 homepage-8 bg-cardboard infotext">
  <div class="homepage-carpet animate-rotate"> <img class="" src="http://cdn.jan-kath.com/dist/img/homepage/slide-carpet.jpg" alt="slide" /> </div>
  <div class="cell">
    <div class="one_half slidein">
      <div class="headline bigger versal pink">Manu<br>
        facturing</div>
      <div class="subtext lined black non-versal"> <a href="/company/quality-and-manufacturing/"> <strong class="pink versal">Jan Kath relies on long-established production methods for the realization of his ideas.</strong><br>
        <br>
        The carpets are handwoven in the Himalayas, in India or in the Atlas mountains of Morocco at manufacturing sites that are often still run as small family businesses. One-of-a-kind natural materials in combination with manual produc­tion techniques lend each carpet its own particular character, making it a unique piece. <strong class="pink">››</strong> </a> </div>
    </div>
    <div class="one_half last slidein">
      <div class="headline bigger versal pink">Fair<br>
        trade</div>
      <div class="subtext lined black non-versal"> <a href="/company/sustainability-and-fairtrade/"> <strong class="pink versal">Fair payment and good working conditions are a matter, of course, for Jan Kath.</strong><br>
        <br>
        Together with the label STEP, Jan Kath is committed to observing strict social and ecological standards in his carpet workshops. Independent inspectors regularly monitor working conditions in the workshops. STEP and Jan Kath do not tolerate any improper child labor. <strong class="pink">››</strong> </a> </div>
    </div>
  </div>
</div>
<div class="viewport homepage-9"> <img src="http://cdn.jan-kath.com/dist/img/homepage/slide_06.jpg" alt="" /> </div>
<div class="viewport w100 bg-cover homepage-10 left pt160" style="background-image:url(http://cdn.jan-kath.com/dist/img/homepage/slide_08.jpg); background-position: center center;">
  <div class="headline bigger versal pink slidein">Show<br>
    rooms</div>
  <div class="subtext lined pink versal slidein"> Bochum Headquarters  |  Berlin  |  Cologne  |  Hamburg<br>
    Stuttgart  |  Miami  |  Munich  |  New York  |  Vancouver </div>
</div>
<div class="viewport vertical-slider"> <a href="#" class="carousel-control next"><i class="icon-angle-up"></i></a> <a href="#" class="carousel-control prev"><i class="icon-angle-down"></i></a>
  <div class="carousel">
    <div class="item" style="background-image:url(http://cdn.jan-kath.com/dist/img/showroom_bochum_klein.jpg)"> <a href="/showrooms/bochum/">
      <div class="inner dead-centered">
        <div>
          <h3>Bochum<br>
            Showroom</h3>
        </div>
      </div>
      </a> </div>
    <div class="item" style="background-image:url(http://cdn.jan-kath.com/dist/img/showroom_berlin_klein.jpg)"> <a href="/showrooms/berlin/">
      <div class="inner dead-centered">
        <div>
          <h3>Berlin<br>
            Store</h3>
        </div>
      </div>
      </a> </div>
    <div class="item" style="background-image:url(http://cdn.jan-kath.com/dist/img/showroom_newyork_klein.jpg)"> <a href="/showrooms/new-york/">
      <div class="inner dead-centered">
        <div>
          <h3>New York<br>
            Showroom</h3>
        </div>
      </div>
      </a> </div>
    <div class="item" style="background-image:url(http://cdn.jan-kath.com/dist/img/showroom_cologne_klein.jpg)"> <a href="/showrooms/cologne/">
      <div class="inner dead-centered">
        <div>
          <h3>Cologne<br>
            Store</h3>
        </div>
      </div>
      </a> </div>
    <div class="item" style="background-image:url(http://cdn.jan-kath.com/dist/img/showroom_stuttgart_klein.jpg)"> <a href="/showrooms/stuttgart/">
      <div class="inner dead-centered">
        <div>
          <h3>Stuttgart<br>
            Showroom</h3>
        </div>
      </div>
      </a> </div>
    <div class="item" style="background-image:url(http://cdn.jan-kath.com/dist/img/showroom_hamburg_klein.jpg)"> <a href="/showrooms/hamburg/">
      <div class="inner dead-centered">
        <div>
          <h3>Hamburg<br>
            Store</h3>
        </div>
      </div>
      </a> </div>
    <div class="item" style="background-image:url(http://cdn.jan-kath.com/dist/img/showroom_miami_klein.jpg)"> <a href="/showrooms/miami/">
      <div class="inner dead-centered">
        <div>
          <h3>Miami<br>
            Store</h3>
        </div>
      </div>
      </a> </div>
    <div class="item" style="background-image:url(http://cdn.jan-kath.com/dist/img/showroom_munich_klein.jpg)"> <a href="/showrooms/munich/">
      <div class="inner dead-centered">
        <div>
          <h3>Munich<br>
            Store</h3>
        </div>
      </div>
      </a> </div>
    <div class="item" style="background-image:url(http://cdn.jan-kath.com/dist/img/showroom_vancouver_klein.jpg)"> <a href="/showrooms/vancouver/">
      <div class="inner dead-centered">
        <div>
          <h3>Vancouver<br>
            Showroom</h3>
        </div>
      </div>
      </a> </div>
  </div>
</div>
<?php
                                                                                                                                                                                        get_footer();
                                                                                                                                                                                        
