<?php 
session_start();
include 'database/config.php';
$uname=$_POST['uname'];
$pas=$_POST['pass'];
$query=mysql_query("select * from user where uname='$uname' and password='$pas'")or die(mysql_error());
$cek=mysql_num_rows($query);
$row=mysql_fetch_array($query);
if ($row['akses']=="superadmin"){
	$_SESSION['uname']=$uname;
	header("location:superadmin/data_member.php?user=$_SESSION[uname]");
}
elseif ($row['akses']=="admin"){
	$_SESSION['uname']=$uname;
	header("location:admin/profile_pengurus.php?user=$_SESSION[uname]");
}
elseif ($row['akses']=="penghuni"){
	$_SESSION['uname']=$uname;
	$_SESSION['id_member'];
	header("location:penghuni/profile.php?user=$_SESSION[uname]");
}
elseif ($row['akses']=="tenaga ahli"){
	$_SESSION['uname']=$uname;
	header("location:tenaga ahli/profile.php?user=$_SESSION[uname]");
}
else
{
	header("location:login.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>