<?php
	include 'header.php';
?>
			<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Tambah Penghuni</h4>
                                    <p class="category">Masukan data penghuni</p>
                                </div>
							<div class="card-content">
                                    <form action="tambah_penghuni_act.php" method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Penghuni</label>
                                                    <input type="text" class="form-control" name="uname" id="uname" required>
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">No Telepon</label>
                                                    <input type="text" class="form-control" name="telp" id="telp" required>
                                                </div>
                                            </div>
                                        </div>
										<?php
											$u=$_SESSION['uname'];
											$p=mysql_query("select user.*,member.* from user join member on user.id_member = member.id_member where uname = '$u'");
											$d=mysql_fetch_array($p);
										?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kode Area</label>
                                                    <input type="text" class="form-control" name="area" id="area" value="<?php echo $d['kode_area']?>" required readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Alamat</label>
                                                    <textarea type="text" class="form-control materialize-textarea" name="alamat" id="alamat" required ><?php echo $d['alamat']?></textarea>
                                                </div>
                                            </div>
                                        </div>
										
										 <div class="row">
											 <div class="file-field input-field col s6" >
											  <div class="btn">
												<span>Foto</span>
												<input type="file" id="foto" name="foto" required>
											  </div>
											</div>
										</div>
											<button type="submit" class="btn btn-primary pull-left">Submit&nbsp;<i class="material-icons prefix">send</i></button>
											<div class="clearfix"></div>
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