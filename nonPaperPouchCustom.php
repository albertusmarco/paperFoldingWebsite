<?php
include "menu.php";
?>
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
    <section style="background-color:#F5F5F5;">
      <br/><br/><br/><br/>
        <span style="float:left;margin-left:80px;margin-top:35px;background-color:#FFFFFF;">
          <br/>
          <a class="navbar-caption text-black display-5" style="margin:0.8cm;">SIZE</a>
          <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select id="pouchSize">
              <option value="5">9 cm x 15 cm</option>
              <option value="6" selected>13 cm x 20 cm</option>
              <option value="7">14 cm x 23 cm</option>
              <option value="8">16 cm x 25 cm</option>
              <option value="9">18 cm x 29 cm</option>
              <option value="10">22,5 cm x 33 cm</option>
            </select>&nbsp;&nbsp;&nbsp;
            <br/><br/>

            <a class="navbar-caption text-black display-5" style="margin:0.8cm;">COLOR</a>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Choose : <input type="color" id="color" value="#ffffff"/>
            <br/>
            <input id="applyButton1" type="button" onclick="processColor()" value="Apply" style="margin-left:225px"/>
            <br/>
            <br/>

            <a class="navbar-caption text-black display-5" style="margin:0.8cm;">IMAGE</a>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" value="Choose File" id="imageButtonCopy"/>
            <span id="customText">No file chosen, yet.</span>
            <br/>
            <br/>
            <span id="imageSpan" style="margin:1cm;"></span>
            <input type="file" name="fileToUpload" id="imageButton" hidden="hidden"/>
            <br/>
            <input id="applyButton2" type="button" onclick="processImage()" value="Apply" style="margin-left:225px"/>
            <br/>
            <br/>
        </span>

          <span id = "custom" style="float:center;margin-left:10px;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="navbar-caption text-black display-5">CHOOSE SIDE :</a>
            &nbsp;
            <select id="side" style="width:125px">
              <option value="front">FRONT</option>
              <option value="back">BACK</option>
            </select>
            <br/>
            &nbsp;&nbsp;
            <canvas id="myCanvas"></canvas>
            <!-- three.js library -->
            <script src = "js/three.js"></script>
            <script src = "js/OrbitControls.js"></script>
            <script src= "js/boxPouch.js"></script>
          </span>

          <span style="float:right;margin-right:85px;background-color:#FFFFFF;">
            <br/>
            <a class="navbar-caption text-black display-5" style="margin:0.8cm;">CUSTOM DETAIL</a><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Packaging Type : Paper Pouch <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Width : <span id="demo">13</span> cm <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Height : <span id="demo2">20</span> cm <br/>
            <a class="navbar-caption text-black display-5" style="margin:0.8cm;"> INSTRUCTIONS : </a><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Orbit Control : Hold Left-Click Mouse <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Zoom-in & Zoom-out : Scroll Mouse <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. The attributes will be changed<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;according the side options<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. You can't save your customization due
            &nbsp;&nbsp;&nbsp;&nbsp;<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to your sign in requirement
            &nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
          </span>

          <span style="clear:both;"></span>

          <script>
          var e = document.getElementById("pouchSize");
          var boxWidth = 13;
          var boxHeight = 20;
          e.onclick = function() {
            var pouchSizeValue = e.options[e.selectedIndex].value;
            switch(pouchSizeValue){
              case '5':
                boxWidth = 9;
                boxHeight = 15;
                break;
              case '6':
                boxWidth = 13;
                boxHeight = 20;
                break;
              case '7':
                boxWidth = 14;
                boxHeight = 23;
                break;
              case '8':
                boxWidth = 16;
                boxHeight = 25;
                break;
              case '9':
                boxWidth = 18;
                boxHeight = 29;
                break;
              case '10':
                boxWidth = 22.5;
                boxHeight = 33;
                break;
            }
            document.getElementById("demo").innerHTML = boxWidth;
            document.getElementById("demo2").innerHTML = boxHeight;
          }
          </script>
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
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                <div class="soc-item">
                        <a href="https://instagram.com/sendwish.id" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                         <a href="https://wa.me/6283833002258" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"></span>
                        </a>
                         <a href="contactmail.php" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-mail socicon"></span>
                        </a>
                    </div></div>
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