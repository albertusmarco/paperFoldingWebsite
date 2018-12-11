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
      <table align="center" width="80%" border="0">
        <tr align="left">
          <td height="50">Customer ID</td>
          <td>:
            <?php
			$emailcust = $_SESSION['email'];
               $sql = "SELECT `customer`.id_customer from `customer` WHERE `email`='$emailcust';";
              $data = viewData($sql);
              $row = mysqli_fetch_row($data);
              echo $row[0];
            ?>
          </td>
        </tr>
        <tr align="left">
          <td height="50">Name</td>
          <td>:
            <?php
			   $sql = "SELECT `customer`.name from `customer` WHERE `email`='$emailcust';";
              $data = viewData($sql);
              $row = mysqli_fetch_row($data);
              echo $row[0];
            ?>
          </td>
        </tr>
        <tr align="left">
          <td height="50">Address</td>
          <td>:
            <?php
              $sql = "SELECT `customer`.address from `customer` WHERE `email`='$emailcust';";
              $data = viewData($sql);
              $row = mysqli_fetch_row($data);
              echo $row[0];
            ?>
          </td>
        </tr>
        <tr align="left">
          <td height="50">Email</td>
          <td>:
            <?php
              $sql = "SELECT `customer`.email from `customer` WHERE `email`='$emailcust';";
              $data = viewData($sql);
              $row = mysqli_fetch_row($data);
              echo $row[0];
            ?>
          </td>
        </tr>
        <tr align="left">
          <td height="50">Phone</td>
          <td>:
            <?php
              $sql = "SELECT `customer`.phone from `customer` WHERE `email`='$emailcust';";
              $data = viewData($sql);
              $row = mysqli_fetch_row($data);
              echo $row[0];
            ?>
          </td>
        </tr>
        <tr align="left">
          <td height="50">Postal Code</td>
          <td>:
            <?php
              $sql = "SELECT `customer`.postal_code from `customer` WHERE `email`='$emailcust';";
              $data = viewData($sql);
              $row = mysqli_fetch_row($data);
              echo $row[0];
            ?>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p align="center">
      <input class="btn btn-form btn-primary display-4" type="submit" name="signout" id="signout" value="Sign Out" />
      <?php
	  if(isset($_POST["signout"]))
	  {$_SESSION['adasesi'] = "0";
	  echo'<meta http-equiv="refresh" content="1; URL=index.php" />';}
	  ?>
      </p>
    </form>
    
  </section>






  <!-- footer -->
  <section once="" class="cid-rblxeb4aPl" id="footer6-1e">
    <div class="container">
      <div class="media-container-row align-center mbr-white">
        <div class="col-12">
          <p class="mbr-text mb-0 mbr-fonts-style display-7">
            Find us on :</p>
        </div>
      </div>
    </div>
  </section>
  <section once="" class="cid-rbkA1DU2DQ mbr-reveal" id="footer7-1f">
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
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>

</body>
</html>