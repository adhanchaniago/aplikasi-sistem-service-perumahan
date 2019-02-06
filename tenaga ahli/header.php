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
	<link rel="stylesheet" href="../assets/sweetalert/dist/sweetalert.css"/>
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<link rel="stylesheet" href="../assets/materialize/css/materialize.css />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	
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
			$fo=mysql_query("select user.*,ta.* from user join ta on user.id_ta = ta.id_ta where user.uname='$use'");
			while($f=mysql_fetch_array($fo)){
				?>				

				<div class="col-xs-6 col-md-12">
					<a class="thumbnail">
						<img class="img-responsive circle" src="../assets/img/<?php echo $f['foto']; ?>" style="width:80px;height:100px;">
					<p align="center"><?php echo $f['nama_ta'];?></p>
					<p align="center"><?php echo $f['akses'];?></p>
					</a>
				</div>
				<?php 
			}
			?>		
		</div>
                <ul class="nav">
                    <li class="active">
                        <a class="wave-effects" href="profile.php?user=<?php echo $_SESSION['uname']?>	">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a class="wave-effects" href="data_order.php?user=<?php echo $_SESSION['uname']?>	">
                            <i class="material-icons">visibility</i>
                            <p>Lihat Order</p>
                        </a>
                    </li>
					<li class="active">
                        <a class="wave-effects" href="update_order.php?user=<?php echo $_SESSION['uname']?>	">
                            <i class="material-icons">assignment_turned_in</i>
                            <p>Update Status Order</p>
                        </a>
                    </li>					
                    <li class="active">
                        <a class="wave-effects" href="laporan.php?user=<?php echo $_SESSION['uname']?>">
                            <i class="material-icons">dvr</i>
                            <p>Laporan</p>
                        </a>
                    </li>
                  
                    <li class="active">
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
          