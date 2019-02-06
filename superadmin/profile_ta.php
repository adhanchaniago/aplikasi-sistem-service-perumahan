<?php
include 'header.php';
?>
<h3 class="col-md-4">Data Profile</h3>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-14">
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Profile Tenaga Ahli</h4>
        <a href="data_tenaga_ahli.php"><i class="material-icons">navigate_before</i>  Kembali</a>
    </div>
	<div class="card-content">
	<div class="col-md-12">
	<?php 
		$id=mysql_real_escape_string($_GET['id_ta']);
		$p=mysql_query("select * from ta where id_ta='$id'");
		while($b=mysql_fetch_array($p)){
		$u=mysql_query("select * from user where id_ta='$b[id_ta]'");
		$q=mysql_fetch_array($u)
		
		?>
	<form action="akun_ta.php" method="post" class="col-md-4">
		
		<table class="table">
		<input name="id_ta" type="hidden" class="form-control"  id="id_ta" value="<?php echo $b['id_ta']?>">
					<tr>
					<td>
					
					<img class="img-responsive center" style="width:150px;height:150px;" src="../assets/img/<?php echo $b['foto']; ?>">
					</a>
					</td>
					</tr>			
					<tr>
					<td>
					<label>Nama Tenaga Ahli</label></td>
					<td><input name="nama" type="text" class="form-control" placeholder="Nama " id="nama" value="<?php echo $b['nama_ta']?>" readonly>
					</td>
					</tr>
					<tr>
					<td>
					<label>Keahlian</label></td>
						<td><input name="kode" type="number_format" class="form-control" placeholder="kode area" id="kode" value="<?php echo $b['keahlian']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>No Telepon</label></td>
						<td><input name="no_telp" type="number_format" class="form-control" placeholder="No Telepon" id="no_telp" value="<?php echo $b['telepon']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>Alamat</label></td>
						<td><input name="alamat" type="text" class="form-control" placeholder="alamat" id="alamat" value="<?php echo $b['alamat']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>Username</label></td>
						<td><input name="uname" type="text" class="form-control" placeholder="Tidak Aktif" id="uname" value="<?php echo $q['uname']?>"></td>
					</tr>
					<tr>
					<td>
					<label>Password</label></td>
						<td><input name="password" type="text" class="form-control" placeholder="Tidak Aktif" id="password" value="<?php echo $q['password']?>"></td>
					</tr>
					<tr>
					<td>
					<label>Hak Akses</label></td>
						<td><select name="akses" type="text" class="form-control" placeholder="Tidak Aktif" id="akses"  selected required>
							<option><?php echo $q['akses']?></option>
							<option value="admin" >Admin</option>
							<option value="penghuni">Penghuni</option>
							<option value="tenaga ahli">Tenaga Ahli</option>
							</select></td>
					</tr>						
				</table>
				<button type="submit" class="btn btn-primary pull-left"><i class="material-icons prefix">person_add</i>&nbsp;Simpan</button>
	<?php 
	}
		
	?>	
	</form>	
	
			

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