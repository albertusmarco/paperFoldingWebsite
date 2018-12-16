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
      /* border: 1px solid black; */
      /* width:1000px;
      height:1000px; */
    }
    /* canvas {
    padding: 10;
    margin: auto;
    display: block;
    width: 800px;
    height: 600px;
    position: absolute;
    top: 10;
    bottom: 10;
    left: 10;
    right: 10;
    } */
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

    <!-- p5.js library -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.2/p5.js"></script>
    <script src="js/sketch.js"></script> -->


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

                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5">SENDWISH : PAPERCUP CUSTOMIZE</a></span>
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

    <section style="background-color:#F5F5F5;">
      <br/><br/><br/><br/>
        <span style="float:left;margin-left:80px;margin-top:35px;background-color:#FFFFFF;">
          <br/>
          <a class="navbar-caption text-black display-5" style="margin:0.8cm;">SIZE</a>
          <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select id="paperSize">
              <option value="1">8 oz : 6 cm x 5 cm x 5 cm</option>
              <option value="2">12 oz : 8,5 cm x 5,8 cm x 10,5 cm</option>
              <option value="3">16 oz : 8,5 cm x 5,8 cm x 12,5 cm</option>
            </select>&nbsp;&nbsp;&nbsp;
            <!-- <a id="size1">8 oz : 6 cm x 5 cm x 5 cm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a id="size2">12 oz : 8,5 cm x 5,8 cm x 10,5 cm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a id="size3">16 oz : 8,5 cm x 5,8 cm x 12,5 cm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
            <br/><br/>
            <a class="navbar-caption text-black display-5" style="margin:0.8cm;">COLOR</a>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test
        </span>
        <!-- <br/> -->

          <span id = "custom" style="float:center;margin-left:10px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="navbar-caption text-black display-5">CHOOSE SIDE :</a>
            &nbsp;
            <select id="side" style="width:125px">
              <option value="front">FRONT</option>
              <option value="down">BOTTOM</option>
            </select>
            <br/>
            &nbsp;&nbsp;
            <canvas id="myCanvas"></canvas>
            <!-- three.js library -->
            <script src = "js/three.js"></script>
            <script src = "js/OrbitControls.js"></script>
            <script src= "js/papercup.js"></script>
          </span>

          <span style="float:right;margin-right:85px;background-color:#FFFFFF;">
            <br/>
            <a class="navbar-caption text-black display-5" style="margin:0.8cm;">ORDER DETAIL</a><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Packaging Type : Paper Cup <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material :
            <select id="material">
              <option value="artpaper">Art Paper</option>
              <option value="artcarton">Art Carton</option>
              <option value="ivorytexture">Ivory Texture</option>
              <option value="bcmanila">BC Manila</option>
              <option value="duplex">Duplex</option>
              <option value="samson">Samson</option>
              <option value="paperkraft">Paper Kraft</option>
            </select> <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Top Diameter : <span id="demo">6</span> cm <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base Diameter : <span id="demo2">5</span> cm <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Height : <span id="demo3">5</span> cm <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minimum Order : 50 <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity : <input type="number" name="quantity" min="50" style="width:150px;"> <br/>
            <br/>
            <a class="navbar-caption text-black display-5" style="margin:0.8cm;"> INSTRUCTIONS : </a><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Orbit Control : Hold Left-Click Mouse <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Zoom-in & Zoom-out : Scroll Mouse <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. The attributes will be changed <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;according the side options<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Make sure all order detail already desire
            &nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-md btn-primary display-4" href="">SUBMIT</a>
            <br/>
            <br/>
          </span>

          <script>
            var e = document.getElementById("paperSize");
            var radiusTop = 6;
            var radiusBottom = 5;
            var height = 5;
            e.onclick = function() {
              var paperSizeValue = e.options[e.selectedIndex].value;
              switch(paperSizeValue){
                case '1':
                  radiusTop = 6;
                  radiusBottom = 5;
                  height = 5;
                  break;
                case '2':
                  radiusTop = 8.5;
                  radiusBottom = 5.8;
                  height = 10.5;
                  break;
                case '3':
                  radiusTop = 8.5;
                  radiusBottom = 5.8;
                  height = 12.5;
                  break;
              }
              document.getElementById("demo").innerHTML = radiusTop;
              document.getElementById("demo2").innerHTML = radiusBottom;
              document.getElementById("demo3").innerHTML = height;
            }
          </script>

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
