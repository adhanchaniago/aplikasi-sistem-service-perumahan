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
                                    <p class="category">Detail Biaya</p>
                                </div>
							<div class="card-content">                  
									<?php
										$id=mysql_real_escape_string($_GET['id_order']);
										$d=mysql_query("select ta.*,orders.*,member.* from orders join ta on orders.id_ta=ta.id_ta join member on member.id_member=orders.id_member where orders.id_order='$id'");
										$data=mysql_fetch_array($d);
		
									?>
                                        
									<form action="detail_tagihan_act.php" method="post">
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
												<input name="id_order" type="hidden" class="form-control" id="id_order" value="<?php echo $data['id_order']?>">
                                                    <label class="control-label">Tanggal Order</label>
                                                    <input type="text" class="form-control" name="tgl_order" id="tgl_order" value="<?php echo $data['tgl_order']?>" readonly required>
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Penghuni</label>
                                                    <input type="text" class="form-control" name="uname" id="uname" value="<?php echo $data['nama'] ?>" readonly required>
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">No Telepon</label>
                                                    <input type="text" class="form-control" name="telp" id="telp" value="<?php echo $data['telepon'] ?>" readonly required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat']?>" required readonly>
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group label-floating">
													<label>Kategori Perbaikan<label>
													<input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['kategori']?>" required readonly>
												</div>
											</div>
										</div>
										 <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Keluhan</label>
                                                    <input type="text" class="form-control" name="keluhan" id="keluhan" value="<?php echo $data['keluhan']?>" readonly required >
                                                </div>
                                            </div>
                                        </div>
										 <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Status</label>
                                                    <input type="text" class="form-control" name="Status" id="Status" value="<?php echo $data['status']?>" readonly required >
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
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tanggal Mulai</label>
                                                    <input type="text" class="form-control" name="tgl_mulai" id="tgl_mulai" value="<?php echo $data['tgl_mulai']?>" readonly required >
                                                </div>
                                            </div>
                                        </div>
										 <div class="row">
                                            <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="">Tanggal Selesai</label>
                                                    <input type="text" class="form-control" name="tgl" id="tgl" value="<?php echo $data['tgl_selesai']?>" required >
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Biaya</label>
                                                    <input type="text" class="form-control" name="tagihan" id="tagihan" value="<?php echo $data['biaya']?>" required >
                                                </div>
                                            </div>
                                        </div>
										<div class="cont">
										<div class="row">
										<div class="col-md-2">
												<label>Rating</label>
										</div>
										
											<div class="stars">
										
											  <input class="star star-5" id="star-5-2" value="5" type="radio"value="5" name="rating"/>
											  <label class="star star-5" for="star-5-2"></label>
											  <input class="star star-4" id="star-4-2" value="4" type="radio" name="rating"/>
											  <label class="star star-4" for="star-4-2"></label>
											  <input class="star star-3" id="star-3-2" value="3" type="radio" name="rating"/>
											  <label class="star star-3" for="star-3-2"></label>
											  <input class="star star-2" id="star-2-2" value="2" type="radio" name="rating"/>
											  <label class="star star-2" for="star-2-2"></label>
											  <input class="star star-1" id="star-1-2" value="1" type="radio" name="rating"/>
											  <label class="star star-1" for="star-1-2"></label>
											
											</div>
											</div>
										</div>
										
											<button type="submit" class="btn btn-primary pull-left">Selesai&nbsp;<i class="material-icons prefix">check</i></button>
											
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