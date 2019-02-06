
<?php 
include '../database/config.php';
require_once 'detail_tagihan.php';
?>

<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
<script src="../assets/sweetalert/dist/sweetalert.min.js"></script>
 <?php
$id_order=$_POST['id_order'];
$id_ta=$_POST['id_ta'];
$rating=$_POST['rating'];
$p=mysql_query("update orders set status='Lunas' where id_order='$id_order'");
$ins=mysql_query("update ta set rating='$rating' where id_ta='$id_ta'");
if ($ins && $p) {
		echo "<script>
  swal('Sukses', 'Data Berhasil Ditambahkan', 'success')
  </script>";
  }
header("location:tagihan.php");

 ?>