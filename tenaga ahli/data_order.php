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
											<th>Status</th>
											<th>Aksi</th>
                                        </thead>
                                        <tbody>
										<?php
										$use=$_SESSION['uname'];
										$p=mysql_query("select user.*,member.*,orders.*,ta.* from user join ta on user.id_ta=ta.id_ta join orders on ta.keahlian=orders.kategori join member on member.id_member=orders.id_member where ta.keahlian = orders.kategori and orders.status='Menunggu' and user.uname='$use'");
										while($r=mysql_fetch_array($p)){
										?>
                                            <tr>
												<input type="hidden" value="<?php echo $r['id_order']?>">
                                                <td><?php echo $r['tgl_order']?></td>
                                                <td><?php echo $r['nama']?></td>
                                                <td><?php echo $r['kategori']?></td>
                                                <td><?php echo $r['keluhan']?></td>
												<td><?php echo $r['status']?></td>
												<td><a href="konfirm_order.php?id_order=<?php echo $r['id_order']?>"><input type="button" class="btn btn-warning" value="Konfirmasi Order"></a></td>
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