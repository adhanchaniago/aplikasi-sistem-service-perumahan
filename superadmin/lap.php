<?php
	include 'header.php';
?>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Laporan Data Order</h4>
                                    <p class="category">Status Order</p>
                                </div>
                                <div class="card-content table-responsive">
									
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th></th>
											<th>Tanggal Order</th>
                                            <th>Nama Penghuni</th>
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
										$p=mysql_query("select member.*, user.id_member,user.uname,orders.* from member join user on member.id_member=user.id_member join orders on orders.id_member=user.id_member");
										while($r=mysql_fetch_array($p)){
											$data=mysql_query("select * from ta");
											$d=mysql_fetch_array($data);
										?>
                                            <tr>
												<td ><input type="hidden" id="id_order" name="id_order" value="<?php echo $r['id_order']?>"></td>
                                                <td><?php echo $r['tgl_order']?></td>
                                                <td><?php echo $r['nama']?></td>
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
<?php
	include 'footer.php';
?>