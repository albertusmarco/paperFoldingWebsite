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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }

    @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding: 2px 16px;
      background-color: #00a1c3;
      color: white;
    }

    .modal-body {padding: 2px 16px;}

    .modal-footer {
      padding: 2px 16px;
      background-color: #00a1c3;
      color: white;
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
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

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
          <span id="jenis" value="softbox" hidden="hidden">PAPER POUCH</span>
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

            <a class="navbar-caption text-black display-5" style="margin:0.8cm;">TEXT</a>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Create : <input type="text" id="text" style="width:150px;height:25px;"/>
            <br/>
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Align :
            <input id="applyButton" type="button" onclick="processTextLeft()" value="Left" />
            <input id="applyButton" type="button" onclick="processTextCenter()" value="Center" />
            <input id="applyButton" type="button" onclick="processTextRight()" value="Right" />
            <br/>
            <br/>

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
            <canvas id="canvasText" hidden="hidden"></canvas>
            <canvas id="myCanvas"></canvas>
            <!-- three.js library -->
            <script src = "js/three.js"></script>
            <script src = "js/OrbitControls.js"></script>
            <script src= "js/boxPouch.js"></script>
          </span>

          <span style="float:right;margin-right:85px;background-color:#FFFFFF;">
            <br/>
            <a class="navbar-caption text-black display-5" style="margin:0.8cm;">ORDER DETAIL</a><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Packaging Type : Paper Pouch <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Material :
            <select id="material">
              <option value="kraftandfoil">Kraft and Foil</option>
            </select> <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Combination :
            <select id="combination">
              <option value="sablon">Sablon</option>
              <option value="stickervinyl">Sticker Vinyl</option>
              <option value="stickerbontax">Sticker Bontax</option>
              <option value="hotprint">Hot Print</option>
              <option value="uvprint">UV Print</option>
              <option value="silversticker">Silver Sticker</option>
              <option value="goldsticker">Gold Sticker</option>
            </select> <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Width : <span id="demo">13</span> cm <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Height : <span id="demo2">20</span> cm <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minimum Order : 50 <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity : <input type="number" id="quantity" min="50" style="width:150px;"> <br/>
            <br/>
            <a class="navbar-caption text-black display-5" style="margin:0.8cm;"> INSTRUCTIONS : </a><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Orbit Control : Hold Left-Click Mouse <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Zoom-in & Zoom-out : Scroll Mouse <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. The attributes will be changed<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;according the side options<br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Make sure all order detail already desire
            &nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-md btn-primary display-4" onClick="process3D()">SUBMIT</a>
            <br/>
            <br/>
          </span>

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

          <span style="clear:both;"></span>
    </section>


<br/><br/><br/><br/>
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
      <!-- The Modal -->
      <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
      <div class="modal-header">
        <h2>Order Confirmation : <span id="judul"></span></h2>
        <span class="close">&times;</span>
      </div>
      <div class="modal-body">
        <p>Your Estimated <span id="tipeHarga"></span> is : Rp <span id="harga"></span>,00</p>
        <p>Are you sure?</p>
      </div>
      <div class="modal-footer">
        <input id="okBtn" type="button" value="OK"/>
        <input id="cancelBtn" type="button" value="Cancel"/>
      </div>
      </div>
      </div>
  </body>
</html>
