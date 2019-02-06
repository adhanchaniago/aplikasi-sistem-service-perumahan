<?php
	include 'header.php';
?>
			<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Order</h4>
                                    <p class="category">Konfirmasi Order</p>
                                </div>
							<div class="card-content">                  
									<?php
										$use=$_SESSION['uname'];
										$id=mysql_real_escape_string($_GET['id_order']);
										$d=mysql_query("select ta.*,user.* from ta join user on ta.id_ta=user.id_ta where user.uname='$use'");
										$data=mysql_fetch_array($d);
										$p=mysql_query("select member.*,orders.*,ta.id_ta,ta.nama_ta,ta.keahlian from ta join orders on ta.keahlian=orders.kategori join member on orders.id_member=member.id_member where orders.id_order='$id'");
										$r=mysql_fetch_array($p);
									?>
                                        
									<form action="konfirm_order_act.php" method="post">
									<input name="id_order" type="hidden" class="form-control"  id="id_order" value="<?php echo $r['id_order']?>">
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tanggal Order</label>
                                                    <input type="text" class="form-control" name="tgl_order" id="tgl_order" value="<?php echo $r['tgl_order']?>" readonly required>
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Penghuni</label>
                                                    <input type="text" class="form-control" name="uname" id="uname" value="<?php echo $r['nama'] ?>" readonly required>
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">No Telepon</label>
                                                    <input type="text" class="form-control" name="telp" id="telp" value="<?php echo $r['telepon'] ?>" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $r['alamat']?>" required readonly>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group label-floating">
													<label>Kategori Perbaikan<label>
													<input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $r['kategori']?>" required readonly>
												</div>
											</div>
										</div>
										 <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Keluhan</label>
                                                    <input type="text" class="form-control" name="keluhan" id="keluhan" value="<?php echo $r['keluhan']?>" readonly required >
                                                </div>
                                            </div>
                                        </div>
										 <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Status</label>
                                                    <input type="text" class="form-control" name="Status" id="Status" value="<?php echo $r['status']?>" readonly required >
                                                </div>
                                            </div>
                                        </div>
										<input type="hidden" class="form-control" name="id_ta" id="id_ta" value="<?php echo $data['id_ta']?>" readonly required >
										<div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Tenaga Ahli</label>
                                                    <input type="text" class="form-control" name="nama_ta" id="nama_ta" value="<?php echo $data['nama_ta']?>" readonly required >
                                                </div>
                                            </div>
                                        </div>
										 <div class="row">
                                            <div class="col-md-4">
												<div class="form-group ">
													<label class="control-label">Tanggal Mulai</label>
                                                    <input type="date" class="form-control" name="tanggal" id="tanggal" autocomplete="off" required >
                                                </div>
                                            </div>
                                        </div>
											<button type="submit" class="btn btn-primary pull-left">Konfirmasi&nbsp;<i class="material-icons prefix">send</i></button>
											
                                    </form>
                                </div>
                            </div>
                        </div> 
					 </div>
				 </div>
            </div>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tanggal").datepicker({dateFormat : 'Y-m-d'});							
		});
	</script>
<?php
	include 'footer.php';
?>