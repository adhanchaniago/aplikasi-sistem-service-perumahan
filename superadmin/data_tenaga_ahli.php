<?php include 'header.php';
error_reporting(0);
 ?>

 <h3 class="col-md-4">Data Tenaga Ahli</h3>

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-14">
<div class="card">
<div class="card-header" data-background-color="purple">
  


<?php 
$per_hal=9;
$jumlah_record=mysql_query("SELECT COUNT(*) from ta ");	
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

	<table>
		<tr>
			<td>Jumlah Tenaga Ahli&nbsp;:&nbsp;</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman&nbsp;:&nbsp;</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	
</div>
<div class="card-content">
<?php 
	
	$peg=mysql_query("select * from ta limit $start, $per_hal");
	
	?>
		<table class="table" cellpadding="5">
		<tr>
<?php	
		$jml_kolom=3;
		$cnt=0;
	while($b=mysql_fetch_object($peg)){	
		?>
		<?php
		if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;
 
  ?>
		<td align="center">
				
				<div>	
						<img class="img-responsive" valign="bottom" style="width:80px;height:100px;" src="../assets/img/<?php echo $b->foto; ?>">
				</div>
				<div>
				<input type="hidden" name="id_ta" id="id_ta" value="<?php echo $b->id_ta ?>"><br>
				<label type="text" name="nama" id="nama"><?php echo $b->nama_ta ?></label><br>
				<a href="profile_ta.php?id_ta=<?php echo $b->id_ta; ?>">Lihat Profile&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
			<div>
			</td>
				
		<?php 
	}
	?>	
</tr>	
</table>
<div data-background-color="purple">
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>	
									
                                </div>
                            </div>
                        </div> 
					 </div>
				 </div>
            </div>
</div>
<?php 
	include 'footer.php';
?>