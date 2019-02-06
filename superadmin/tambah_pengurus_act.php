
<?php 
include '../database/config.php';
require_once 'tambah_pengurus.php';
?>

<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
<script src="../assets/sweetalert/dist/sweetalert.min.js"></script>
 <?php
$uname=$_POST['uname'];
$jab=$_POST['jab'];
$masjab=$_POST['masjab'];
$telp=$_POST['telp'];
$area=$_POST['area'];
$alamat=$_POST['alamat'];
$foto=$_POST['foto'];
$query = "SELECT max(id_member) as maxId FROM member where jabatan = 'RW'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$id = $data['maxId'];
if($id){
$nilai = substr($id,4, 4);
$noId = (int) $nilai;
$noId = $noId + 1;
$id_oto= "PP".str_pad($noId, 4, "0", STR_PAD_LEFT);
} else {
	$id_oto="PP0001";
}
$ins=mysql_query("insert into member values('$id_oto','$uname','$jab','$masjab','$telp','$area','$alamat','$foto')");
if ($ins) {
		echo "<script>
  swal('Sukses', 'Data Berhasil Ditambahkan', 'success')
  </script>";
  }
header("location:tambah_pengurus.php");

 ?>