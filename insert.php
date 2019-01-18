<?php
  include "koneksi.php";
  session_start();

  $obj = json_decode($_POST['obj'], true);
  $type = $obj['type'];
  $price = $obj['price'];
  $quantity = $obj['quantity'];
  $json = $obj['json'];
  $material = $obj['material'];
  $combination = $obj['combination'];
  $lamination = $obj['lamination'];
  $size1 = $obj['size1'];
  $size2 = $obj['size2'];
  $size3 = $obj['size3'];
  $imgList = $obj['imgList'];
  print_r($obj);

  // $sql = "INSERT INTO customer (NAME,email,phone,address,postal_code) VALUES('$judul', 'coba@gmail.com', '08123456789', 'Surabaya', '65151');";
  // dml($sql);
?>
