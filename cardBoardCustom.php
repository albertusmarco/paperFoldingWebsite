<!DOCTYPE html>
<html>
  <head>
    <title>Sendwish</title>

    <style>
    body
    {
      margin:0;
    }
    canvas
    {
      border: 1px solid black;
      background: grey;
    }
    </style>

    <!-- mobirise template -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


    <link rel="stylesheet" type="text/css" href="css/sizeSlider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css">
  </head>
  <body>
    <section class="menu cid-rbkgwRuNyn" once="menu" id="menu2-1">
        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">

                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5">SENDWISH : CARDBOARD CUSTOMIZE</a></span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                        <a class="nav-link link text-black display-4" href="index.php#header10-3">
                            Home</a>
                    </li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#features15-9">
                            Portfolio</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#testimonials-slider1-b">
                            About</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="noshop.php">
                            Shop</a></li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="https://mobirise.co">
                            Sign In</a>
                    </li></ul>

            </div>
        </nav>
    </section>

    <section style="background-color:#7DBDC1;">
      <br/><br/><br/><br/>
        <span style="float:left;">
          <a class="navbar-caption text-black display-5">SIZE</a>
          <div class="slidecontainer" style="float:left;">
              Width :
              <input type="range" min="1" max="100" value="60" id="boxWidth">
              <span id="demo"></span> cm
              <!-- <p>Custom range slider:</p>
              <input type="range" min="1" max="100" value="50" class="slider" id="myRange"> -->
            </div>
            <script>
              var slider = document.getElementById("boxWidth");
              var output = document.getElementById("demo");
              output.innerHTML = slider.value;

              slider.oninput = function() {
                output.innerHTML = this.value;
              }
            </script>
            <br/>
            <div class="slidecontainer" style="float:left;">
              Height :
              <input type="range" min="1" max="100" value="40" id="boxHeight">
              <span id="demo2"></span> cm
            </div>
            <script>
              var slider2 = document.getElementById("boxHeight");
              var output2 = document.getElementById("demo2");
              output2.innerHTML = slider2.value;

              slider2.oninput = function() {
                output2.innerHTML = this.value;
              }
            </script>
            <br/>
            <div class="slidecontainer" style="float:left;">
              Depth :
              <input type="range" min="1" max="100" value="20" id="boxDepth">
              <span id="demo3"></span> cm
            </div>
            <script>
              var slider3 = document.getElementById("boxDepth");
              var output3 = document.getElementById("demo3");
              output3.innerHTML = slider3.value;

              slider3.oninput = function() {
                output3.innerHTML = this.value;
              }
            </script>
            <a class="navbar-caption text-black display-5">COLOR</a>
            <br>
            test
        </span>
        <!-- <br/> -->

          <span id = "custom" style="float:center;">
            <a class="navbar-caption text-black display-5">CHOOSE SIDE</a>
            <br/>
            <canvas id="myCanvas"></canvas>
            <!-- three.js library -->
            <script src = "js/three.js"></script>
            <script src = "js/OrbitControls.js"></script>
            <script src= "js/box.js"></script>
          </span>

          <span style="float:right;">
            <a class="navbar-caption text-black display-5">ORDER DETAIL</a> <br/>
            _____________________________________________________________________ <br/>
            Packaging Type : ___ <br/>
            Material : ___ <br/>
            Minimum Order : 50 <br/>
            Order : ___ <br/>
            Width : <span id="demo"></span> cm <br/>
            Height : <span id="demo2"></span> cm <br/>
            Depth : <span id="demo3"></span> cm <br/>
            Quantity : ___ <br/>
            _____________________________________________________________________ <br/>
            <br/>
            INSTRUCTIONS : <br/>
            1. Orbit Control : Hold Left-Click Mouse <br/>
            2. Zoom-in & Zoom-out : Scroll Mouse
          </span>

          <span style="clear:both;"></span>
    </section>

    <section once="" class="cid-rblxeb4aPl" id="footer6-r">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        Find us on :</p>
                </div>
            </div>
        </div>
    </section>

    <section once="" class="cid-rbkA1DU2DQ mbr-reveal" id="footer7-f">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="row social-row">
                    <div class="social-list align-right pb-2">
                    <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                            </a>
                        </div><div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"></span>
                            </a>
                        </div><div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div></div>
                </div>
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7"></p>
                </div>
            </div>
        </div>
    </section>


      <script src="assets/web/assets/jquery/jquery.min.js"></script>
      <script src="assets/popper/popper.min.js"></script>
      <script src="assets/tether/tether.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/smoothscroll/smooth-scroll.js"></script>
      <script src="assets/dropdown/js/script.min.js"></script>
      <script src="assets/parallax/jarallax.min.js"></script>
      <script src="assets/mbr-popup-btns/mbr-popup-btns.js"></script>
      <script src="assets/mbr-flip-card/mbr-flip-card.js"></script>
      <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
      <script src="assets/mbr-testimonials-slider/mbr-testimonials-slider.js"></script>
      <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
      <script src="assets/theme/js/script.js"></script>
  </body>
</html>
