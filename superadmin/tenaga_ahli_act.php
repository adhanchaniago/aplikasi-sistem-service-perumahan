<?php 
include '../database/config.php';
require_once 'tambah_tenaga_ahli.php';
?>

<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
<script src="../assets/sweetalert/dist/sweetalert.min.js"></script>
 <?php
$uname=$_POST['uname'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];
$kategori=$_POST['kategori'];
$foto=$_POST['foto'];
$query = "SELECT max(id_ta) as maxId FROM ta";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$id = $data['maxId'];
if($id){
$nilai = substr($id,4, 4);
$noId = (int) $nilai;
$noId = $noId + 1;
$id_oto= "TA".str_pad($noId, 4, "0", STR_PAD_LEFT);
} else {
	$id_oto="TA0001";
}
$ins=mysql_query("insert into ta values('$id_oto','$uname','$kategori','$telp','$alamat','$foto','')");
if ($ins) {
		echo "<script>
  swal('Sukses', 'Data Berhasil Ditambahkan', 'success')
  </script>";
  }
header("location:tambah_tenaga_ahli.php");

 ?>