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
                                <div class="card-content ">
								
									<form class="col-md-4 col-md-offset-9" method="get">
										
										<div class="row">
											<input type="date" id="tgl" name="tgl" autofocus >
											<input class="btn" type="submit" onclick="this.form.submit()" value="Cari">
										</div>
									
									</form>
									<br>
									<br>
									<br>
									<form method="post" action="lap_pdf.php">
                                    <table class="table table-responsive">
                                        <thead class="text-primary">
                                            <th></th>
											<th>Tanggal Order</th>
                                            <th>Nama Penghuni</th>
                                            <th>Kategori</th>
                                            <th>Keluhan</th>
											<th>Nama Tenaga Ahli</th>
											<th>Tanggal Mulai</th>
											<th>Tanggal Selesai</th>
											<th>Status</th>
											
											
                                        </thead>
                                        <tbody>
										<?php
										$use=$_SESSION['uname'];
										if(isset($_GET['tgl'])){
										$tgl=mysql_real_escape_string($_GET['tgl']);
										$p=mysql_query("select member.*, user.id_member,user.uname,orders.* from member join user on member.id_member=user.id_member join orders on orders.id_member=user.id_member where user.uname='$use' and orders.status='Lunas' and tgl_order like '$tgl'");
										
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
												<td><?php echo $r['status']?></td>
												<td><a type="submit" style="margin-bottom:10px" href="lap_pdf.php?id_order=<?php echo $r['id_order'] ?>" target="_blank" class="btn btn-default pull-right"><i class="material-icons">print</i>&nbsp;cetak</a></td>
                                            </tr>
											<?php
										}
									
										}else{
										$p=mysql_query("select member.*, user.id_member,user.uname,orders.* from member join user on member.id_member=user.id_member join orders on orders.id_member=user.id_member where user.uname='$use' and orders.status='Lunas'");
										}
										
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
												<td><?php echo $r['status']?></td>
                                            </tr>
											<?php
										}
									?>
                                        </tbody>
                                    </table>
									</form>
                                </div>
                            </div>
                        </div>
						<script type="text/javascript">

        var $input = $( '.datepicker' ).pickadate({
            formatSubmit: 'yyyy/mm/dd',
            // min: [2015, 7, 14],
            container: '#container',
            // editable: true,
            closeOnSelect: false,
            closeOnClear: false,
        })

        var picker = $input.pickadate('picker')
        // picker.set('select', '14 October, 2014')
        // picker.open()

        // $('button').on('click', function() {
        //     picker.set('disable', true);
        // });

    </script>
<?php
	include 'footer.php';
?>