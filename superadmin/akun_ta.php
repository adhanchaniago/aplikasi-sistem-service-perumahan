
<?php 
include '../database/config.php';
require_once 'data_tenaga_ahli.php'
?>

<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
<script src="../assets/sweetalert/dist/sweetalert.min.js"></script>
 <?php
$uname=$_POST['uname'];
$pas=$_POST['password'];
$akses=$_POST['akses'];
$id_ta=$_POST['id_ta'];
$query = "SELECT max(id_user) as maxId FROM user";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$id = $data['maxId'];
if($id){
$nilai = substr($id,4, 4);
$noId = (int) $nilai;
$noId = $noId + 1;
$id_oto= "US".str_pad($noId, 4, "0", STR_PAD_LEFT);
} else {
	$id_oto="US0001";
}
$cek_user=mysql_num_rows(mysql_query("SELECT * FROM user WHERE id_ta='$id_ta'"));
if ($cek_user > 0) {
mysql_query("update user set uname='$uname',password='$pas',akses='$akses' WHERE id_ta='$id_ta'");
echo "<script>
  swal('Sukses', 'Data Berhasil Diubah', 'success')
  </script>";
header("location:profile_ta.php");
}
else {
	mysql_query("insert into user values('$id_oto','','$id_ta','$uname','$pas','$akses')");
		echo "<script>
  swal('Sukses', 'Data Berhasil Ditambahkan', 'success')
  </script>";
  
header("location:profile_ta.php");
}
 ?>