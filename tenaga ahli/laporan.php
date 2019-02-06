<?php
	include 'header.php';
?>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Laporan Pekerjaan</h4>
                                    <p class="category">Detail</p>
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
											<th>Tanggal Selesai</th>
											<th>Biaya</th>
											<th>Status</th>
											
                                        </thead>
                                        <tbody>
										<?php
										$use=$_SESSION['uname'];
										$p=mysql_query("select user.*, member.*,orders.*,ta.* from user join ta on user.id_ta=ta.id_ta join orders on ta.id_ta=orders.id_ta join member on orders.id_member=member.id_member where orders.id_ta=ta.id_ta and orders.status='Lunas' and user.uname='$use'");
										while($r=mysql_fetch_array($p)){
										?>
                                            <tr>
                                                <td><?php echo $r['tgl_order']?></td>
                                                <td><?php echo $r['nama']?></td>
                                                <td><?php echo $r['kategori']?></td>
                                                <td><?php echo $r['keluhan']?></td>
												<td><?php echo $r['nama_ta']?></td>
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