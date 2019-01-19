<?php
include "menu.php";
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
    <td><input type="file" name="txtFile" id="txtFile" /></td>
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
    <td colspan="3" align="center"><input class="btn btn-form btn-primary display-4" name="btn_send" id="btn_send" value="Upload" type="button" /></td>
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
  </tr>
</table>

</form>
</body>
</html>