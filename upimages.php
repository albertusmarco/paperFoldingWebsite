<?php
include "menu.php";

// Turn off error reporting
error_reporting(0);
$target_dir = "asset/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$id_order = $_SESSION['idorder'];
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $sql = "INSERT INTO design_detail VALUES( 'O$id_order' , '$target_file' );";
      insertData($sql);
      echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }
    else {
      echo "Sorry, there was an error uploading your file.";
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=rl89eg1or6456yiqjlnrtgz0yo0m8iiid15yp8p3af0tc257"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
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


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<h2 align="center">Please upload your images one by one for better quality printed images</h2>
<br/>
<p align="center">Click 'Done' after you have uploaded all of your images. Thank you :)</p>
<table class="noBorder" align="center" width="50%" border="0">

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Upload Here</td>
    <td>:</td>
  <form action="" method="post" enctype="multipart/form-data">
    <td><input type="file" name="fileToUpload" id="fileToUpload" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td colspan="3" align="center"><input type = "submit" class="btn btn-form btn-primary display-4" name="submit" id="submit" value="Upload" type="button" /></td>
  </form>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td colspan="3" align="center"><input class="btn btn-form btn-primary display-4" name="btn_send" id="btn_send" value="Done" type="button" /></td>
    <script type="text/javascript">
      document.getElementById("btn_send").onclick = function() {
        location.href="index.php";
      };
    </script>
  </tr>
</table>

</form>
</body>
</html>
