<!doctype html>
<html lang="en">
<?php 
	session_start();
	include 'cek.php';
	include '../database/config.php';
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	?>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ariyanto</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!--  core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	 <link href="../assets/css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
	<link rel="stylesheet" type="text/css" href="../assets/css/star-rating.css">
	<link rel="stylesheet" href="../js/pickdate/lib/themes/default.css">
<link rel="stylesheet" href="../../js/pickdate/lib/themes/default.date.css">
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	 
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);

* {
  margin: 0;
  padding: 0;
  font-family: roboto;
}


hr {
  margin: 20px;
  border: none;
  border-bottom: thin solid rgba(255,255,255,.1);
}

div.title { font-size: 2em; }

h1 span {
  font-weight: 300;
  color: #Fd4;
}

div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>
<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
	
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="profile.php?user=<?php echo $_SESSION['uname']?>" class="simple-text">
                    Service Perumahan
                </a>
            </div>
            <div class="sidebar-wrapper">
			<div class="row">
			<?php 
			$use=$_SESSION['uname'];
			$fo=mysql_query("select user.*,member.* from user join member on user.id_member = member.id_member where user.uname='$use'");
			while($f=mysql_fetch_array($fo)){
				?>				

				<div class="col-xs-6 col-md-12">
					<a class="thumbnail">
						<img class="img-responsive circle" src="../assets/img/<?php echo $f['foto']; ?>" style="width:80px;height:100px;">
					<p align="center"><?php echo $f['nama'];?></p>
					<p align="center"><?php echo $f['akses'];?></p>
					</a>
				</div>
				<?php 
			}
			?>		
		</div>
                <ul class="nav">
                    <li class="active">
                        <a class="wave-effects" href="profile.php?user=<?php echo $_SESSION['uname']?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li  class="active">
                        <a class="wave-effects" href="profile.php?user=<?php echo $_SESSION['uname']?>">
                            <i class="material-icons">person</i>
                            <p>Profile</p>
                        </a>
                    </li>
					<li  class="active">
                        <a class="wave-effects" href="order.php?user=<?php echo $_SESSION['uname']?>">
                            <i class="material-icons">border_color</i>
                            <p>Order Service</p>
                        </a>
                    </li >
                    <li  class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#isi "> <i class="material-icons">arrow_drop_down_circle</i><p>Lihat Data</p> </a>
                            <ul id="isi" class="collapse">
                         <br>   
                                <a href="data_order.php?user=<?php echo $_SESSION['uname']?>"> <i class="material-icons">description</i><p>Lihat Data Order</p></a>
                         <br>
                                <a href="tagihan.php?user=<?php echo $_SESSION['uname']?>"><i class="material-icons">dvr</i><p>Lihat Tagihan</p></a>
                            
                        </ul>
                       
                    </li>
					<li  class="active">
                        <a class="wave-effects" href="lap.php?user=<?php echo $_SESSION['uname']?>">
                            <i class="material-icons">dvr</i>
                            <p>Laporan</p>
                        </a>
                    </li >
                    <li  class="active">
                        <a class="wave-effects" href="logout.php">
                            <i class="material-icons">exit_to_app</i>
                            <p>Keluar</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute" >
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       
                    </div>
                    </div>
            </nav>
          