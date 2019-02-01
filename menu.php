<?php
include "koneksi.php";
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <!-- Site made with Mobirise Website Builder v4.8.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!-- <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon"> -->

  <meta name="description" content="">
  <title>sendwish</title>
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

                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="index.php"><img src="assets/images/ayo-fix-poo-30.png" width='150px' height='30px'/></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php">
                        Home</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#features15-9">
                        Portfolio</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#testimonials-slider1-b">
                        About</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="
                          <?php
                            if(!isset($_SESSION['adasesi'])){
                              echo('noshop.php');
                            }
                            elseif($_SESSION['adasesi']==1){
                              echo('shop.php');
                            }
                            else {
                              echo('noshop.php');
                            }
                          ?>">
                        Shop</a></li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="<?php
					if(!isset($_SESSION['adasesi']))
					{echo("login.php");}
					else
					{if($_SESSION['adasesi'] == "1")
                        {
                          if($_SESSION['namauser'] == "Admin"){
                            echo("admin.php");
                          }else{
                          echo("profile.php");}
                        }
						else
						{echo("login.php");}}

					?>">
					<?php
					if(!isset($_SESSION['adasesi']))
					{echo("Sign In");}
					else
					  { if($_SESSION['adasesi'] == "1")
                        {echo($_SESSION['namauser']);}
						else
						{echo("Sign In");}}
					?></a>
                </li></ul>

        </div>
    </nav>
</section>



</body>
</html>
