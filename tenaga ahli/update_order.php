<?php
	include 'header.php';
?>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Data Order</h4>
                                    <p class="category">Status Order</p>
                                </div>
                                <div class="card-content table-responsive">
									
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Tanggal Order</th>
                                            <th>Nama Penghuni</th>
                                            <th>Kategori</th>
                                            <th>Keluhan</th>
											<th>Nama Tenaga Ahli</th>
											<th>Tanggal Mulai</th>
											<th>Status</th>
											<th>Aksi</th>
                                        </thead>
                                        <tbody>
										<?php
										$use=$_SESSION['uname'];
										$p=mysql_query("select member.*,orders.*,ta.* from ta join orders on ta.id_ta=orders.id_ta join member on orders.id_member=member.id_member where orders.id_ta=ta.id_ta and status='Diterima'");
										while($r=mysql_fetch_array($p)){
										?>
                                            <tr>
												<input type="hidden" id="id_order" name="id_order" value="<?php echo $r['id_order'] ?>">
                                                <td><?php echo $r['tgl_order']?></td>
                                                <td><?php echo $r['nama']?></td>
                                                <td><?php echo $r['kategori']?></td>
                                                <td><?php echo $r['keluhan']?></td>
												<td><?php echo $r['nama_ta']?></td>
												<td><?php echo $r['tgl_mulai']?></td>
												<td><?php echo $r['status']?></td>
												<td><a href="update_status.php?id_order=<?php echo $r['id_order'] ?>" ><input type="button" class="btn btn-warning" type="button"  value="Update Status"></a></td>
                                            </tr>
											<?php
										}
									?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
<?php
	include 'footer.php';
?>