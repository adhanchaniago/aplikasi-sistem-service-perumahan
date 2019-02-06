<?php
	include 'header.php';
?>
			<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Tambah Tenaga Ahli</h4>
                                    <p class="category">Masukan data tenaga ahli</p>
                                </div>
							<div class="card-content">
                                    <form action="tenaga_ahli_act.php" method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Tenaga Ahli</label>
                                                    <input type="text" class="form-control" name="uname" id="uname" required>
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-4">
												<select id="kategori" name="kategori" class="col-lg-12">
												 <option value="">Kategori Keahlian</option>
												 <option value="Furniture">Furniture</option>
												 <option value="Elektronik">Elektronik</option>
												 <option value="Listrik">Listrik</option>
												 <option value="Bangunan">Bangunan</option>
												 <option value="Otomotif">Otomotif</option>
												</select>
										
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
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Alamat</label>
                                                    <textarea type="text" class="form-control materialize-textarea" name="alamat" id="alamat" required></textarea>
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