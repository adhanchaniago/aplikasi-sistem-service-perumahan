
<?php 
include '../database/config.php';
?>

<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
<script src="../assets/sweetalert/dist/sweetalert.min.js"></script>
 <?php
$id_ta=$_POST['id_ta'];
$id=$_POST['id_order'];
$tgl=$_POST['tanggal'];
$nama=$_POST['nama_ta'];
$ins=mysql_query("update orders set id_ta='$id_ta', tgl_mulai='$tgl',status='Diterima' where id_order='$id' ");
if ($ins) {
		echo "<script>
  swal('Sukses', 'Data Berhasil Ditambahkan', 'success')
  </script>";
 } 
header("location:update_order.php");

 ?>