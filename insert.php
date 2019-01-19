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
  $available = $obj['available'];
  $size1 = $obj['size1'];
  $size2 = $obj['size2'];
  $size3 = $obj['size3'];

  $id_product = mysqli_fetch_row(viewData("select id_product from product where name='$type'"));
  $id_customer = $_SESSION['idcust'];
  $tmp = mysqli_fetch_row(viewData("SELECT COUNT(*) FROM `order`;"));
  $id_order = (int) $tmp[0] + 1 ;
  $_SESSION['idorder'] = "$id_order";

  $sql = "INSERT INTO `order` (id_order,id_customer,id_product,material,combination,lamination,available,size1,size2,size3,path_custom,qty,price,status) VALUES('O$id_order', '$id_customer', '$id_product[0]', '$material', '$combination', '$lamination', '$available', '$size1', '$size2', '$size3', 'custom/custom.obj', '$quantity', '$price', '-');";
  insertData($sql);
?>
