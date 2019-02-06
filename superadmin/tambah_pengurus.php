<?php
	include 'header.php';
?>
			<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Tambah Pengurus</h4>
                                    <p class="category">Masukan data pengurus</p>
                                </div>
							<div class="card-content">
                                    <form action="tambah_pengurus_act.php" method="post">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nama Pengurus</label>
                                                    <input type="text" class="form-control" name="uname" id="uname" required>
                                                </div>
                                            </div>
										</div>
										<div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Jabatan</label>
                                                    <input type="text" class="form-control" name="jab" id="jab" value="RW" readonly required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Masa Jabatan</label>
                                                    <input type="text" class="form-control" name="masjab" id="masjab" required>
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
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kode Area</label>
                                                    <input type="text" class="form-control" name="area" id="area" required>
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