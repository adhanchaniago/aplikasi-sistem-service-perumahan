
<?php 
include '../database/config.php';
require_once 'update_status.php';
?>

<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
<script src="../assets/sweetalert/dist/sweetalert.min.js"></script>
 <?php
$id=$_POST['id_order'];
$tgl=$_POST['tgl'];
$tagihan=$_POST['tagihan'];
$ins=mysql_query("update orders set tgl_selesai='$tgl',biaya='$tagihan',status='Selesai' where id_order='$id' ");
if ($ins) {
		echo "<script>
  swal('Sukses', 'Data Berhasil Diperbaharui', 'success')
  </script>";
  }
header("location:update_order.php");

 ?>