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
        <h4 class="title">Profile </h4>
    </div>
	<div class="card-content">
	<div class="col-md-12">
	<?php 
		$use=$_SESSION['uname'];
		$p=mysql_query("select ta.*, user.* from ta join user on ta.id_ta=user.id_ta where user.uname='$use'");
		$b=mysql_fetch_array($p);		
		?>
	<form class="col-md-7">
		
		<table class="table">
		<input name="id_member" type="hidden" class="form-control"  id="id_member" value="<?php echo $b['id_ta']?>">
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
					<label>No Telepon</label></td>
						<td><input name="no_telp" type="number_format" class="form-control" placeholder="No Telepon" id="no_telp" value="<?php echo $b['telepon']?>" required></td>
					</tr>
					<tr>
					<td>
					<label>Keahlian</label></td>
						<td><input name="keahlian" type="teks" class="form-control" placeholder="keahlian" id="keahlian" value="<?php echo $b['keahlian']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>Alamat</label></td>
						<td><input name="alamat" type="text" class="form-control" placeholder="alamat" id="alamat" value="<?php echo $b['alamat']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>Username</label></td>
						<td><input name="uname" type="text" class="form-control" placeholder="Tidak Aktif" id="uname" value="<?php echo $b['uname']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>Password</label></td>
						<td><input name="password" type="text" class="form-control" placeholder="Tidak Aktif" id="password" value="<?php echo $b['password']?>" readonly></td>
					</tr>
					<tr>
					<td>
					<label>Hak Akses</label></td>
						<td><input name="akses" type="text" class="form-control" placeholder="Tidak Aktif" id="akses" value="<?php echo $b['akses']?>" readonly></td>
					</tr>					
				</table>
					
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