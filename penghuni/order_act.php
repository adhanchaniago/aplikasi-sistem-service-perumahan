
<?php 
include '../database/config.php';
require_once 'order.php';
?>

<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
<script src="../assets/sweetalert/dist/sweetalert.min.js"></script>
 <?php
$id_member=$_POST['id_member'];
$tgl=$_POST['tgl_order'];
$kategori=$_POST['kategori'];
$keluhan=$_POST['keluhan'];
$query = "SELECT max(id_order) as maxId FROM orders";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$id = $data['maxId'];
if($id){
$nilai = substr($id,4, 4);
$noId = (int) $nilai;
$noId = $noId + 1;
$id_oto= "OR".str_pad($noId, 4, "0", STR_PAD_LEFT);
} else {
	$id_oto="OR0001";
}
$ins=mysql_query("insert into orders values('$id_oto','$id_member','','$tgl','$kategori','$keluhan','','','','Menunggu')");
if ($ins) {
		echo "<script>
  swal('Sukses', 'Data Berhasil Ditambahkan', 'success')
  </script>";
  }
header("location:order.php");

 ?>