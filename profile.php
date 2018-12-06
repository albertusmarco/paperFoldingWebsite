<?php
  include "menu.php";
  session_start();
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
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
  <style>
    .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
    }
    .button2 {
        background-color: white; 
        color: black; 
        border: 2px solid #008CBA;
    }
    .button2:hover {
        background-color: #008CBA;
        color: white;
    }
    .noBorder{
      border: 0;
    }
  </style>
  <section class="features18 popup-btn-cards cid-rbljldAFZH" id="features18-k">
    <form id="formAdmin" name="form1" method="post" action="">
      <p>&nbsp;</p>
      <table align="left" width="80%" border="0">
        <tr align="center">
          <td>USERNAME ID</td>
          <td>
            <?php
              // echo USERNAME AND EMAIL
            ?>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <table align="center" width="80%" border="2">
        <tr align="center">
          <td height="10">No.</td>
          <td>Order Date</td>
          <td>Order ID</td>
          <td>Packaging</td>
          <td>Progress Status</td>
        </tr>
        <?php
          $no = 0;
          $sql = "SELECT `order`.order_time, `order`.id_order, `order_detail`.id_design, `order`.status FROM `order`, `order_detail` WHERE `order`.id_order = `order_detail`.id_order AND `order`.id_customer = 'C1';"; //NEED TO GET ID FROM USER SESSION
          $data = viewData($sql);
          while ($row = mysqli_fetch_row($data))
          {
            echo ("<tr align='center'><td>". ++$no .".</td><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>");
          }
        ?>
      </table>
    </form>
    
  </section>






  <!-- footer -->
  <section once="" class="cid-rbkA1DU2DQ mbr-reveal" id="footer7-f">
    <div class="container">
      <div class="media-container-row align-center mbr-white">
        <div class="row social-row">
          <div class="col-12">
            <p class="mbr-text mb-0 mbr-fonts-style display-7">
            Find us on :</p>
          </div>
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
            </div>
          </div>
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