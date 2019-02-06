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
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<script src="../assets/js/highcharts.js" type="text/javascript"></script>
<script>
		var chart1; 
		$(document).ready(function() {
			  chart1 = new Highcharts.Chart({
				 chart: {
					renderTo: 'mygraph',
					type: 'column'
				 },   
				 title: {
					text: 'Data Order '
				 },
				 xAxis: {
					categories: ['Status']
				 },
				 yAxis: {
					title: {
					   text: 'Laporan Data Order'
					}
				 },
					  series:             
					[
						<?php 
						include '../database/konek.php';
						$sql   = "SELECT * FROM orders where status='Lunas'";
						$d=mysqli_query($con,$sql) or die(mysqli_error());
						$temp = mysqli_fetch_array( $sql );
						{
							$status=$temp['status'];                     
							$sql_total   ="SELECT count(status) as jml FROM orders where status='$status'";
							$r=   mysqli_query($con,$sql_total) or die(mysqli_error());
							while( $data = mysqli_fetch_array( $sql_total ) )
							{
								$total = $data['jml'];                 
							}             
						?>
							{
							  name: '<?php echo $status; ?>',
							  data: [<?php echo $total; ?>]
							},
							<?php 
						} 	
						?>
						]
			  });
		   });	
	</script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="data_member.php?user=<?php echo $_SESSION['uname']?>" class="simple-text">
                    Service Perumahan
                </a>
            </div>
			
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a class="wave-effects" href="data_member.php?user=<?php echo $_SESSION['uname']?>">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li  class="active">
                        <a class="wave-effects" href="tambah_pengurus.php?user=<?php echo $_SESSION['uname']?>">
                            <i class="material-icons">person_add</i>
                            <p>Tambah Pengurus</p>
                        </a>
                    </li>
					<li  class="active">
                        <a class="wave-effects" href="tambah_tenaga_ahli.php?user=<?php echo $_SESSION['uname']?>">
                            <i class="material-icons">person_add</i>
                            <p>Tambah Tenaga Ahli</p>
                        </a>
                    </li>
					<li  class="active">
                        <a class="wave-effects" href="data_pengurus.php?user=<?php echo $_SESSION['uname']?>">
                            <i class="material-icons">person</i>
                            <p>Data Pengurus</p>
                        </a>
                    </li >
                    <li  class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#isi "> <i class="material-icons">arrow_drop_down_circle</i><p>Lihat Data</p> </a>
                            <ul id="isi" class="collapse">
                         <br>   
                                <a href="data_member.php?user=<?php echo $_SESSION['uname']?>"> <i class="material-icons">assignment_ind</i><p>Lihat Data Member</p></a>
						 <br>   
                                <a href="data_tenaga_ahli.php?user=<?php echo $_SESSION['uname']?>"> <i class="material-icons">assignment_ind</i><p>Lihat Data Tenaga Ahli</p></a>
                         <br>
                                <a href="lap.php?user=<?php echo $_SESSION['uname']?>"><i class="material-icons">dvr</i><p>Lihat Laporan</p></a>
                            
                        </ul>
                       
                    </li>					                  
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
          