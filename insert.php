<?php
  include "koneksi.php";
  session_start();

  $obj = json_decode($_POST['obj'], true);
  $judul = $obj['judul'];
  print_r($obj);

  $sql = "INSERT INTO customer (NAME,email,phone,address,postal_code) VALUES('$judul', 'coba@gmail.com', '08123456789', 'Surabaya', '65151');";
  dml($sql);
?>
