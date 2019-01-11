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
  <title>SENDWISH</title>
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
 
<section class="engine"><a href="https://mobirise.info/w">free html5 templates</a></section><section class="header10 cid-rbkq4YRq2S mbr-fullscreen mbr-parallax-background" id="header10-3">

    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(225, 225, 225);"></div>
    
  <div class="container align-center">
<div class="row">
    <div class="mbr-white col-lg-4 col-md-7 content-container">
        <p class="mbr-text pb-3 mbr-fonts-style display-5"></p>
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
        
 <form class="mbr-form" action="" method="post" data-form-title="Mobirise Form">
 
             <div align="center">
             <br/>
             <br/>
             <br/>
              <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style">WELCOME</h1>
              <br/>
             </div>
    	  <div data-for="name">
                    <div class="form-group">
                        <div align="center">
                          <input type="text" class="form-control px-3" name="tname" data-form-field="Name" placeholder="Name" required id="tname">
                        </div>
                    </div>
                </div>
               <div data-for="phone">
                 <div class="form-group">
                     <div align="center">
                         <p>
                           <input type="text" class="form-control px-3" name="tphone" data-form-field="Phone" placeholder="Phone" required id="tphone" onkeypress="return isNumber(event);">
                         </p>
                   </div>
                 </div>
               </div>
               <div data-for="address">
                 <div class="form-group">
                     <div align="center">
                         <p>
                           <input type="text" class="form-control px-3" name="taddress" data-form-field="Address" placeholder="Address" required id="taddress">
                         </p>
                   </div>
                 </div>
               </div>
               <div data-for="pcode">
                 <div class="form-group">
                     <div align="center">
                         <p>
                           <input type="text" class="form-control px-3" name="tpcode" data-form-field="Postal Code" placeholder="Postal Code" required id="tpcode" onkeypress="return isNumber(event);">
                         </p>
                   </div>
                 </div>
               </div>
<script>           
function isNumber(e){
e = e || window.event;
var charCode = e.which ? e.which : e.keyCode;
return /\d/.test(String.fromCharCode(charCode));}
</script>	          
               
                 <div data-for="email">
                 <div class="form-group">
                     <div align="center">
                         <p>
                           <input type="text" class="form-control px-3" name="temail" data-form-field="Email" placeholder="Email" required id="temail">
                         </p>
                   </div>
                 </div>
               </div>
               <div data-for="password">
                 <div class="form-group">
                     <div align="center">
                         <p>
                           <input type="password" class="form-control px-3" name="tpassword" data-form-field="Password" placeholder="Password" required id="tpassword">
                         </p>
                         
<?php
				
if(isset($_POST["signup"]))
{
		$name = $_POST["tname"];
		$phone = $_POST["tphone"];
		$address = $_POST["taddress"];
		$pcode = $_POST["tpcode"];
		$email = $_POST["temail"];
		$pass = $_POST["tpassword"];
		
	$sql = "select count(*) from login where email = '$email';";	
	$row = viewData($sql);
	$emaildb = mysqli_fetch_row($row);
	if($emaildb[0] > 0)
	{echo("<h6 class='mbr-text mbr-light'><font color='red'>This email is not available</font></h6>");}
	
	else{	
	$sql = "select concat('C', count(id_customer)+1) from customer;";
	$hasil = viewData($sql);
	$idcust = mysqli_fetch_row($hasil);
				
	$sql = "insert into customer(id_customer, name, email, phone, address, postal_code)values('$idcust[0]', '$name', '$email', '$phone', '$address', $pcode);";
	$a = insertData($sql);
	
	$sql = "insert into login(email, password, role)values ('$email','$pass',2);";
	$a = insertData($sql);
	
	if ($a >0)
	{$sql = "select name from customer where email = '$email';";
		$hasil = viewData($sql);
		$session = mysqli_fetch_row($hasil);
			$_SESSION['namauser'] = "$session[0]";
			$_SESSION['adasesi'] = 1;
		echo '<meta http-equiv="refresh" content="1; URL=index.php" />';}
	}
}
?> 
                   </div>
                 </div>
               </div>
<div align="center"><span class="input-group-btn">
<br/>
<input class="btn btn-form btn-primary display-4" type="submit" name="signup" id="signup" value="Sign Up" />
</span></div>
 </form>
           
    </div>
	</div>


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
                        <a href="https://instagram.com/sendwish.id" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://wa.me/6283833002258" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-whatsapp socicon"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="contactmail.php" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-mail socicon"></span>
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
