<?php
include "menu.php";
?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Web Maker Description">
  <title>noshop</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>

<style>
  /*[type=radio] { 
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
  }
*/
  /* IMAGE STYLES */
  [type=radio] + img {
    cursor: pointer;
  }

  /* CHECKED STYLES */
  [type=radio]:checked + img {
    outline: 2px solid #0000ff;
  }
</style>

  <section class="header10 cid-rbkq4YRq2S mbr-fullscreen mbr-parallax-background">
    <div class="container">
      <br>
      &nbsp;
      <h1 class="mbr-section-subtitle align-right mbr-light pb-3 mbr-fonts-style display-2">Welcome to Shop!</h2>
      <h3 class="mbr-text align-right pb-3 mbr-fonts-style display-5">
        Select Packaging Type:
      </h3>
      <h3 class="mbr-text align-right pb-3 mbr-fonts-style display-5">
      <label>
        <input type="radio" name="packType" style="position: absolute; opacity: 0; width: 0; height: 0;" value="cardBox">
        <a href="
        <?php
          if($_SESSION['adasesi'] == "1"){
            echo('cardBoardCustom.php');
          }else{
            echo('nonCardBoardCustom.php');
          }
        ?>">

        <img src="assets/images/cardboard-fix-492x492.png" alt="CardBox" title="" width="200" height="200"></a>
      </label>
      <label>
        <input type="radio" name="packType" style="position: absolute; opacity: 0; width: 0; height: 0;" value="paperCup">
        <a href="
        <?php
          if($_SESSION['adasesi'] == "1"){
            echo('papercupCustom.php');
          }else{
            echo('nonPaperCupCustom.php');
          }
        ?>">
        <img src="assets/images/paper-cup-fix-2-492x492.png" alt="PaperCup" title="" width="200" height="200"></a>
      </label>
      <label>
        <input type="radio" name="packType" style="position: absolute; opacity: 0; width: 0; height: 0;" value="paperPouch">
        <a href="
        <?php
          if($_SESSION['adasesi'] == "1"){
            echo('paperPouchCustom.php');
          }else{
            echo('nonPaperPouchCustom.php');
          }
        ?>">
        <img src="assets/images/paper-pouch-fix-492x492.png" alt="PaperPouch" title="" width="200" height="200"></a>
      </label>
      <label>
        <input type="radio" name="packType" style="position: absolute; opacity: 0; width: 0; height: 0;" value="foodWrap">
        <a href="
        <?php
          if($_SESSION['adasesi'] == "1"){
            echo('foodWrapCustom.php');
          }else{
            echo('nonFoodWrapCustom.php');
          }
        ?>">
        <img src="assets/images/food-wrap-fix-492x492.png" alt="FoodWrap" title="" width="200" height="200"></a>
      </label>
      <br>
      <label>
        <input type="radio" name="packType" style="position: absolute; opacity: 0; width: 0; height: 0;" value="paperBag">
        <a href="
        <?php
          if($_SESSION['adasesi'] == "1"){
            echo('paperBagCustom.php');
          }else{
            echo('nonPaperBagCustom.php');
          }
        ?>">
        <img src="assets/images/paper-bag-fix-492x492.png" alt="PaperBag" title="" width="200" height="200"></a>
      </label>
      <label>
        <input type="radio" name="packType" style="position: absolute; opacity: 0; width: 0; height: 0;" value="packLabel">
        <a href="
        <?php
          if($_SESSION['adasesi'] == "1"){
            echo('packLabelCustom.php');
          }else{
            echo('nonPackLabelCustom.php');
          }
        ?>">
        <img src="assets/images/pack-label-492x492.png" alt="Mobirise" title="PackLabel" width="200" height="200"></a>
      </label>
      <label>
        <input type="radio" name="packType" style="position: absolute; opacity: 0; width: 0; height: 0;" value="softBox">
        <a href="
        <?php
          if($_SESSION['adasesi'] == "1"){
            echo('softBoxCustom.php');
          }else{
            echo('nonSoftBoxCustom.php');
          }
        ?>">
        <img src="assets/images/soft-box-super-fix-492x492.png" alt="SoftBox" title="" width="200" height="200"></a>
      </label>
      <label>
        <input type="radio" name="packType" style="position: absolute; opacity: 0; width: 0; height: 0;" value="plasticPouch">
        <a href="
        <?php
          if($_SESSION['adasesi'] == "1"){
            echo('plasticPouchCustom.php');
          }else{
            echo('nonPlasticPouchCustom.php');
          }
        ?>">
        <img src="assets/images/plastic-pouch-fix-492x492.png" alt="PlasticPouch" title="" width="200" height="200"></a>
      </label>
    </h3>
    <!-- <h3 class="mbr-text align-right pb-3 mbr-fonts-style display-5">Select Meterial Type:</h3> -->
    <!-- <form> -->
      <!-- <p class="mbr-text align-right pb-3 mbr-fonts-style display-5"> -->
        <!-- <input type="radio" name="mateT" value="artPaper"> Art Paper &nbsp; -->
        <!-- <input type="radio" name="mateT" value="artCarton"> Art Carton &nbsp; -->
        <!-- <input type="radio" name="mateT" value="ivoryTexture"> Ivory Texture &nbsp; -->
        <!-- <input type="radio" name="mateT" value="bcManila"> BC Manila &nbsp; -->
        <!-- <input type="radio" name="mateT" value="duplex"> Duplex &nbsp; -->
        <!-- <input type="radio" name="mateT" value="samson"> Samson &nbsp; -->
        <!-- <input type="radio" name="mateT" value="paperKraft"> Paper Kraft &nbsp; -->
      <!-- </p> -->
     <!--  <p align="right"><button onclick="myFunction()">Specs List</button></p>
      <input type="text" id="selectSpecs">
      
      
    </form>

    <script>
      function myFunction() {
        var material = document.forms[0];
        var txt = "";
        var i;
        for (i = 0; i < material.length; i++) {
          if (material[i].checked) {
            txt = txt + material[i].value + " ";
          }
        }
        document.getElementById("selectSpecs").value = txt;
      }
    </script> -->

    </div>
  </section>


  <!-- <section class="header10 cid-rbkq4YRq2S mbr-fullscreen mbr-parallax-background" id="header10-3">
  <section class="features18 popup-btn-cards cid-rbljldAFZH" id="features18-k">
    
    <div class="container">
        <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">Choose your packaging type</h3>
        <div class="media-container-row pt-5 ">
          <div class="card p-3 col-12 col-md-6 col-lg-4">
            <div class="card-wrapper ">
              <div class="card-img">
                <img src="assets/images/hard-box-300x300.png" alt="Mobirise" title="">
              </div>
              <div class="card-box">
                <h4 class="card-title mbr-fonts-style display-7">Hard Box</h4>
              </div>
            </div>
          </div>
          <div class="card p-3 col-12 col-md-6 col-lg-4">
            <div class="card-wrapper">
              <div class="card-img">
                <img src="assets/images/paper-cup-300x300.png" alt="Mobirise" title="">
              </div>
              <div class="card-box">
                <h4 class="card-title mbr-fonts-style display-7">Paper Cup</h4>  
              </div>
            </div>
          </div>
          <div class="card p-3 col-12 col-md-6 col-lg-4">
            <div class="card-wrapper">
              <div class="card-img">
                <img src="assets/images/pling-fix-1-300x300.png" alt="Mobirise" title="">
              </div>
              <div class="card-box">
                <h4 class="card-title mbr-fonts-style display-7">Paper Standing Pouch</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h3 class="mbr-section-subtitle display-5 align-center mbr-fonts-style mbr-light">Choose the material</h3>
        <div class="container-fluid">
          <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
              <div class="card-wrapper">
                <div class="card-img">
                  <img src="assets/images/singkatan-hvs-376x289.png" alt="Mobirise" title="">
                </div>
                <div class="card-box">
                  <h4 class="card-title pb-3 mbr-fonts-style display-7">Art Paper</h4>
                  <p class="mbr-text mbr-fonts-style display-7">
                    Available in&nbsp;85 gr, 100 gr, 115 gr, 120 gr, and 150 gr</p>
                </div>
              </div>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-3">
              <div class="card-wrapper">
                <div class="card-img">
                  <img src="assets/images/used-paper-box-folding-gluing-machine-spare-464x464.jpg" alt="Mobirise" title="">
                </div>
                <div class="card-box">
                  <h4 class="card-title pb-3 mbr-fonts-style display-7">Art Carton</h4>
                  <p class="mbr-text mbr-fonts-style display-7">Available in 190 gr, 210 gr, 230 gr, 260 gr, 310 gr, 350 gr, and 400 gr
                  </p>
                </div>
              </div>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-3">
              <div class="card-wrapper">
                <div class="card-img">
                  <img src="assets/images/download-262x192.jpg" alt="Mobirise" title="">
                </div>
                <div class="card-box">
                  <h4 class="card-title pb-3 mbr-fonts-style display-7">Ivory Texture</h4>
                  <p class="mbr-text mbr-fonts-style display-7">
                    Available in&nbsp;210 gr, 230 gr, 250 gr, 310 gr, and 400 gr</p>
                </div>
              </div>
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-3">
              <div class="card-wrapper">
                <div class="card-img">
                  <img src="assets/images/kertas-manila-kertas-manila-mudah-didapat-464x343.jpg" alt="Mobirise" title="">
                </div>
                <div class="card-box">
                  <h4 class="card-title pb-3 mbr-fonts-style display-7">BC Manila</h4>
                  <p class="mbr-text mbr-fonts-style display-7">
                     Available in&nbsp;160 gr, 220 gr, and 250 g</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  </section> -->

<!-- footer -->
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
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>