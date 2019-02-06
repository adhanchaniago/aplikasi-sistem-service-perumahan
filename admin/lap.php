<?php
	include 'header.php';
?>
<div class="content">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Order</h4>
                                    <p class="category">Status Order</p>
                                </div>
                                <div class="card-content table-responsive">
									<!--form class="col-md-4 " method="get">
										
										<div class="row">
										
											<select name="status" id="status" class="form-control">
											  <option value="" disabled selected>Filter Status Order</option>
											  <option value="Lunas">Lunas</option>
											  <option value="Selesai">Selesai</option>
											  <option value="Diterima">Diterima</option>
											</select>
											<input class="btn" type="submit" onclick="this.form.submit()" value="Cari">
										
									</div>
									</form>
									
									<br>
									<br>-->
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th></th>
											<th>Tanggal Order</th>
                                            <th>Nama Penghuni</th>
											<th>Alamat</th>
                                            <th>Kategori</th>
                                            <th>Keluhan</th>
											<th>Nama Tenaga Ahli</th>
											<th>Tanggal Mulai</th>
											<th>Tanggal Selesai</th>
											<th>Biaya</th>
											<th>Status</th>
                                        </thead>
                                        <tbody>
										<?php
										$use=$_SESSION['uname'];
										$b=mysql_query("select user.*,member.* from user join member on user.id_member = member.id_member where uname = '$use'");
										$da=mysql_fetch_array($b);
										$p=mysql_query("select member.*, user.id_member,user.uname,orders.* from member join user on member.id_member=user.id_member join orders on orders.id_member=user.id_member where member.kode_area = '$da[kode_area]'");
										while($r=mysql_fetch_array($p)){
											$data=mysql_query("select * from ta");
											$d=mysql_fetch_array($data);
										?>
                                            <tr>
												<td ><input type="hidden" id="id_order" name="id_order" value="<?php echo $r['id_order']?>"></td>
                                                <td><?php echo $r['tgl_order']?></td>
                                                <td><?php echo $r['nama']?></td>
												<td><?php echo $r['alamat']?></td>
                                                <td><?php echo $r['kategori']?></td>
                                                <td><?php echo $r['keluhan']?></td>
												<td><?php echo $d['nama_ta']?></td>
												<td><?php echo $r['tgl_mulai']?></td>
												<td><?php echo $r['tgl_selesai']?></td>
												<td><?php echo $r['biaya']?></td>
												<td><?php echo $r['status']?></td>
                                            </tr>
											<?php
										}
									?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						
					<script>
					$(document).ready(function() {
    $('select').material_select();
  });
</script>					
<?php
	include 'footer.php';
?>