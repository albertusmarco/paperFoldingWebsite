<?php
include "koneksi.php";
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

                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="https://mobirise.co">SENDWISH</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.html#header10-3">
                        Home</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.html#features15-9">
                        Portfolio</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.html#testimonials-slider1-b">
                        About</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="custom.html">
                        Shop</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="https://mobirise.co">
                        Sign In</a>
                </li></ul>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/w">free html5 templates</a></section><section class="header10 cid-rbkq4YRq2S mbr-fullscreen mbr-parallax-background" id="header10-3">

    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(225, 225, 225);"></div>
    
  <div class="container align-center">
<div class="row">
    <div class="mbr-white col-lg-4 col-md-7 content-container">
    <br/>
    <br/>
    <br/>
    <br/>
       
        <p class="mbr-text pb-3 mbr-fonts-style display-5"></p>
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
        
 
<form class="mbr-form" action="" method="post" data-form-title="Mobirise Form">
             <div align="center">
              <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style">SENDWISH</h1>
              <br/>
             </div>
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
                          <input type="password" class="form-control px-3" name="tpassword" data-form-field="Password" placeholder="Password" required id="tpassword">
                        </div>
                    </div>
                </div>
				
<?php
				
if(isset($_POST["login"]))
{
		$email = $_POST["temail"];
		$pass = $_POST["tpassword"];
				
		$sql = "select email from login where email = '$email';";
		$hasil = viewData($sql);
		$emaill = mysqli_fetch_row($hasil);
		
		if ($email == $emaill[0])
		{
		$sql = "select password from login where email = '$email';";
		$hasil = viewData($sql);
		$password = mysqli_fetch_row($hasil);	
		
			if ($pass == $password[0])
			{
			$sql = "select role from login where email = '$email';";
		$hasil = viewData($sql);
		$role = mysqli_fetch_row($hasil);
		if ($role[0] == 0)	{
				$_SESSION['username'] = "Admin";
				$_SESSION['namauser'] = "Admin";
				echo("berhasil - admin");
				//'<meta http-equiv="refresh" content="1; URL=tambahpenjualan.php" />';
				}
		else {
			
			$sql = "select name from customer where email = '$email';";
		$hasil = viewData($sql);
		$session = mysqli_fetch_row($hasil);
			$_SESSION['username'] = "$email";
			$_SESSION['namauser'] = "$session[0]";
			echo("berhasil - $email");
			//'<meta http-equiv="refresh" content="1; URL=tambahpenjualan.php" />';
			}	
			
			}
			else
			{
				echo ("<h6 class='mbr-text mbr-light'><font color='red'>Password is incorrect. Please try again.</font></h6>");
			}
			
		}
		else
		{
			echo ("<h6 class='mbr-text mbr-light'><font color='red'>Sorry, we can't find an account with that email</font></h6>");
		}
	
	}
?> 
                <div align="center"><span class="input-group-btn">
                 <br/> 
                   <input class="btn btn-form btn-primary display-4" type="submit" name="login" id="login" value="Log In" />
                  </span>
                </div>
            <br/>
            <br/>
             <p><div align="center">
<h6 class="mbr-text mbr-light">Don't have any account?</h6>
<span class="input-group-btn">
<input class="btn btn-form btn-primary display-4" type="submit" name="signup" id="signup" value="Sign Up" />
                  </span>
                </div></p>
                
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
