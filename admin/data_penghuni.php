<?php include 'header.php';
error_reporting(0);
 ?>

 <h3 class="col-md-4">Data Penghuni</h3>

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-14">
<div class="card">
<div class="card-header" data-background-color="purple">
  


<?php 
$per_hal=9;
$u=$_SESSION['uname'];
$p=mysql_query("select user.*,member.* from user join member on user.id_member = member.id_member where uname = '$u'");
$d=mysql_fetch_array($p);
$jumlah_record=mysql_query("SELECT COUNT(*) from member where jabatan='penghuni' and kode_area='$d[kode_area]'");	
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

	<table>
		<tr>
			<td>Jumlah Penghuni&nbsp;:&nbsp;</td>		
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
	$u=$_SESSION['uname'];
	$p=mysql_query("select user.*,member.* from user join member on user.id_member = member.id_member where uname = '$u'");
	$d=mysql_fetch_array($p);
	$peg=mysql_query("select * from member where jabatan ='penghuni' and kode_area='$d[kode_area]' limit $start, $per_hal");
	
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
				<input type="hidden" name="id_member" id="id_member" value="<?php echo $b->id_member ?>"><br>
				<label type="text" name="nama" id="nama"><?php echo $b->nama ?></label><br>
				<a href="profile.php?id_member=<?php echo $b->id_member; ?>">Lihat Profile&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
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