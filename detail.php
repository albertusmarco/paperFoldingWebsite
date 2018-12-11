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
      border: 1px solid black;
      background: grey;
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
    <section style="background-color:#F5F5F5;">
      <br/><br/><br/><br/>
      <span style="float:center;">
        <h1>Object Detail</h1>
      </span>

        <span id = "custom" style="float:center;">
          <canvas id="myCanvas"></canvas>
          <!-- three.js library -->
          <script src = "js/three.js"></script>
          <script src = "js/OrbitControls.js"></script>
          <script src= "js/importObject.js"></script>
        </span>

        <span style="float:right;margin-right:500px;background-color:#FFFFFF;">
          <!-- silahkan code disini DHIENA!! -->
          <a class="navbar-caption text-black display-5" style="margin-left:10px;margin-right:10px;margin-top:10px;">INFORMATION DETAIL</a><br/>
          <?php
            $orderID = $_GET['orderID'];
            $designID = $_GET['designID'];
            $sql = "SELECT `product`.`name`, `material`.`name`, `order_detail`.`qty` FROM `product`, `material`, `order`, `order_detail`, `cust_shelf` WHERE `order`.`id_order` = '$orderID' AND `order_detail`.`id_design` ='$designID' AND `order_detail`.`id_design` = `cust_shelf`.`id_design` AND `cust_shelf`.`id_product` = `product`.`id_product` AND `cust_shelf`.`id_material` = `material`.`id_material`;";
            $data = viewData($sql);
            while ($row = mysqli_fetch_row($data)){
              echo ("<label style='margin-left:10px;margin-right:10px;'>
                Packaging Type : $row[0]<br/>
                Material : $row[1]<br/>
                Quantity : $row[2]<br/></label>");            }
          ?>
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
