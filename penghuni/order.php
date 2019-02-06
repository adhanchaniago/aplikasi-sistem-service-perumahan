<?php
	include 'header.php';
	date_default_timezone_set('Asia/Jakarta');
?>
			<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Order</h4>
                                    <p class="category">Masukan Data</p>
                                </div>
							<div class="card-content">                  
									<?php
										$use=$_SESSION['uname'];
										$p=mysql_query("select member.*, user.* from member join user on member.id_member=user.id_member where user.uname='$use'");
										$r=mysql_fetch_array($p);
									?>
                                        
									<form action="order_act.php" method="post">
									<input name="id_member" type="hidden" class="form-control"  id="id_member" value="<?php echo $r	['id_member']?>">
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tanggal Order</label>
                                                    <input type="text" class="form-control" name="tgl_order" id="tgl_order" value="<?php echo date('Y-m-d')?>" readonly required>
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
											<label class="control-label">Kategori Perbaikan<label>
												<select id="kategori" name="kategori" class="form-control col-lg-12">
												 <option value="">Kategori Perbaikan</option>
												 <option value="Furniture">Furniture</option>
												 <option value="Elektronik">Elektronik</option>
												 <option value="Listrik">Listrik</option>
												 <option value="Bangunan">Bangunan</option>
												 <option value="Otomotif">Otomotif</option>
												</select>
										
											</div>
                                        </div>
										 <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Keluhan</label>
                                                    <textarea type="text" class="form-control" name="keluhan" id="keluhan" required ></textarea>
                                                </div>
                                            </div>
                                        </div>
											<button type="submit" class="btn btn-primary pull-left">Submit&nbsp;<i class="material-icons prefix">send</i></button>
											
                                    </form>
                                </div>
                            </div>
                        </div> 
					 </div>
				 </div>
            </div>
	
<?php
	include 'footer.php';
?>