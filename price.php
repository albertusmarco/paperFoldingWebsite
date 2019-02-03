<?php
  include "menu2.php";
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
      padding: 10px 20px;
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
        background-color: #008CBA;
        color: white;
        border: 2px solid #008CBA;
    }
    .button2:hover {
        background-color: white;
        color: black;
    }
    .noBorder{
      border: 0;
    }
  </style>

  <section class="features18 popup-btn-cards cid-rbljldAFZH" id="features18-k">
    <form id="formAdmin" name="form1" method="post" action="">
      <p>&nbsp;</p>
      <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Price Change Details</h2>
      <!-- <p align="center"><i>*Notes: Progress indication "-" means dp has not been paid yet.</i></p> -->
      <p>&nbsp;</p>
      <table width="80%" align="center">
        <tr><td colspan="2" width="15%"></td><td>
          <h4>PRODUCT INFORMATION</h4>
          <?php
            $orderID = $_GET['orderID'];
            $sql = "SELECT `product`.`name`, `order`.`material`, `order`.`combination`, `order`.`lamination`, `order`.`size1`, `order`.`size2`, `order`.`size3`, `order`.`qty`, `order`.`price` FROM `product`, `order` WHERE `order`.`id_order` = '$orderID' AND `order`.`id_product` = `product`.`id_product`;";
              $data = viewData($sql);
              while ($row = mysqli_fetch_row($data)){
                echo ("<label style='margin-left:10px;margin-right:10px;'>
                  Packaging Type : $row[0]<br/>
                  Material : $row[1]<br/>
                  Combination : $row[2]<br/>
                  Lamination : $row[3]<br/>");
                if ($row[0] == "Paper Pouch" || $row[0] == "Plastic Pouch") {
                  echo ("Width : $row[4]<br/>
                    Height : $row[5]<br/>");
                }elseif ($row[0] == "Paper Cup") {
                  echo ("Top diameter : $row[4]<br/>
                    Base diameter : $row[5]<br/>
                    Height : $row[6]<br/>");
                }else{
                  echo ("Width : $row[4]<br/>
                    Height : $row[5]<br/>
                    Depth : $row[6]<br/>");
                }
                echo ("Quantity : $row[7]<br/>
                  <h4>OLD PRICE : $row[8]</h4><br/></label>");
              }
          ?>
        </td><td>
          <h4>PATH DETAILS</h4>
          <p>Path:
          <?php
            $orderID = $_GET['orderID'];
            $sql = "SELECT `design_detail`.`path_detail` FROM `order`, `design_detail` WHERE `order`.`id_order` = '$orderID' AND `order`.`id_order` = `design_detail`.`id_order`;";
              $data = viewData($sql);
              while ($row = mysqli_fetch_row($data)){
                echo '<p>'.$row[0].'</p>';
              }
          ?></p>
          <h4>New Price</h4>
          <label style='margin-left:10px;margin-right:10px;'>
            <input type="text" name="newPrice" id="newPrice">
          </label>
          <br>
            <input class="button button2" type="submit" name="PriceChange" id="PriceChange" value="Change Price"/>
            <input class="button button2" type="submit" name="Back" id="Back" value="Back" formaction="admin.php" /><br>
        </td></tr>
      </table>
      <?php
      if (isset($_POST['PriceChange'])) {
        $orderID = $_GET['orderID'];
        $priceNew = $_POST["newPrice"];
        $sql2 = "UPDATE `order` SET `price`='$priceNew' WHERE `id_order`='$orderID';";
        $a=insertData($sql2);
        if($a > 0){
          echo '<meta http-equiv="refresh" content="1; URL=admin.php" />';
        }
      }
      ?>




    </form>
  </section>






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
