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
      <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">Customers' Orders List</h2>
      <p align="center"><i>*Notes: Progress indication "-" means dp has not been paid yet.<br>
      **Note: Information contains all information for each order. Also can update price</i></p>
      <table class="noBorder" align="center" width="80%">
        <tr align="center">
          <hr>
          <td height="10">No.</td>
          <td>Order Date</td>
          <td>Order ID</td>
          <td>Customer ID</td>
          <td>Price</td>
          <td>Progress*</td>
          <td>Update</td>
          <td>Down Payment</td>
          <td>Repayment</td>
        </tr>
        <?php
          $no = 0;
          $sql = "SELECT `order`.order_time, `order`.id_order, `order`.id_customer, `order`.price, `order`.status, `order`.path_dp, `order`.path_paid FROM `order` WHERE `order`.status != 'Cancel' ORDER BY `order`.order_time ASC;";
          $data = viewData($sql);
          while ($row = mysqli_fetch_row($data))
          {
            echo ("<tr align='center'><td>". ++$no .".</td><td>$row[0]</td><td>");
            // echo '<input class="button button2" type="submit" name="btnOrderID" id="btnOrderID" value="'.$row[1].'" formaction="detail.php?orderID='.$row[1].'&designID='.$row[3].'"/>';
            echo '<input class="button button2" type="submit" name="btnOrderID" id="btnOrderID" value="'.$row[1].'" formaction="detail.php?orderID='.$row[1].'"/>';
            echo ("</td><td>");
            echo '<input class="button button2" type="submit" name="btnCustID" id="btnCustID" value="'.$row[2].'" formaction="customer.php?custID='.$row[2].'"/>';
            echo("</td><td>$row[3]</td><td>");
            $stat = $no;
            $stat .= 'textStat';
            echo '<select name="'.$stat.'" id="'.$stat.'">';
            if($row[4]=="-"){
              echo '<option value="-" selected="selected">-</option>';
              echo '<option value="In Progress">In Progress</option>';
              echo '<option value="Complete">Complete</option>';
              echo '<option value="Cancel">Cancel</option>';
            }else if($row[4]=="In Progress"){
              echo '<option value="-">-</option>';
              echo '<option value="In Progress" selected="selected">In Progress</option>';
              echo '<option value="Complete">Complete</option>';
              echo '<option value="Cancel">Cancel</option>';
            }else if($row[4]=="Complete"){
              echo '<option value="-">-</option>';
              echo '<option value="In Progress">In Progress</option>';
              echo '<option value="Complete" selected="selected">Complete</option>';
              echo '<option value="Cancel">Cancel</option>';
            }
            echo ("</td><td>");
            echo '<input class="button button2" type="submit" name="Update1" id="Update1" value="Price**" formaction="price.php?orderID='.$row[1].'"/>';
            echo '<input class="button button2" type="submit" name="Update" id="Update" value="Status" formaction="admin.php?stats='.$stat.'&orderID='.$row[1].'"/></td>';
            echo '<td><input class="button button2" type="submit" name="btnViewDP" id="btnViewDP" value="View" formaction="'.$row[5].'"/></td>';
             echo '<td><input class="button button2" type="submit" name="btnViewRepayment" id="btnViewRepayment" value="View" formaction="'.$row[6].'"/>';
            echo "</td></tr>";
          }
        ?>
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
    <?php
      if (isset($_POST['Update'])) {
        $stats = $_GET['stats'];
        $statusP = $_POST[$stats];
        $orderID = $_GET['orderID'];
        $sql2 = "UPDATE `order` SET `status`='$statusP' WHERE `id_order`='$orderID';";
        $a=insertData($sql2);
        if($a > 0){
          echo '<meta http-equiv="refresh" content="1; URL=admin.php" />';
        }
      }
    ?>
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
