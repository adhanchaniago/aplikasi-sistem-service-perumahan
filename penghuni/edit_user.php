<?php 
include '../database/config.php';
require_once 'profile.php';
?>

<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
<script src="../assets/sweetalert/dist/sweetalert.min.js"></script>
 <?php
 
$id=$_POST['id_member'];
$pas=$_POST['password'];
$telp=$_POST['no_telp'];

$up=mysql_query("update member set telepon='$telp' where id_member='$id'");
 if($up){
 echo "
<script>
  swal('Sukses', 'Data Berhasil Diperbaharui', 'success')
  </script>";
 
header("location:profile.php");
 }
?>