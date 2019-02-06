<?php
include '../database/config.php';
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("P","cm","A5");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->Image('../img/logo.png',1,1,2,2);
$pdf->SetFont('Times','B',20);
$pdf->SetX(4); 
$pdf->ln(1);                     
$pdf->MultiCell(11,0,'Service Perumahan',0,'C');
$pdf->SetX(4);
$pdf->Line(0,3.1,20.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(0,3.2,20.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(3);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(10.5,0.7,"Data Laporan Order",0,10,'C');
$pdf->SetFont('Arial','B',10);
date_default_timezone_set('Asia/Jakarta');
$pdf->ln(2);
$pdf->SetFont('Arial','B',10);
$id=mysql_real_escape_string($_GET['id_order']);
$d=mysql_query("select ta.*,orders.*,member.* from orders join ta on orders.id_ta=ta.id_ta join member on member.id_member=orders.id_member where orders.id_order = '$id'");
while($data=mysql_fetch_array($d)){
$pdf->ln(1);
$pdf->Cell(5,0.5,'Tanggal Order',0,'L');
$pdf->Cell(5,0.5,':  '.$data['tgl_order'],0,'L');
$pdf->ln(1);
$pdf->Cell(5,0.5,'Nama Penghuni',0,'L');
$pdf->Cell(5,0.5,':  '.$data['nama'],0,'L');
$pdf->ln(1);
$pdf->Cell(5,0.5,'Telepon',0,'L');
$pdf->Cell(5,0.5,':  '.$data['telepon'],0,'L');
$pdf->ln(1);
$pdf->Cell(5,0.5,'Alamat',0,'L');
$pdf->Cell(5,0.5,':  '.$data['alamat'],0,'L');
$pdf->ln(1);
$pdf->Cell(5,0.5,'Keluhan',0,'L');
$pdf->Cell(5,0.5,':  '.$data['keluhan'],0,'L');
$pdf->ln(1);
$pdf->Cell(5,0.5,'Tanggal Mulai',0,'L');
$pdf->Cell(5,0.5,':  '.$data['tgl_mulai'],0,'L');
$pdf->ln(1);
$pdf->Cell(5,0.5,'Tanggal Selesai',0,'L');
$pdf->Cell(5,0.5,':  '.$data['tgl_selesai'],0,'L');
$pdf->ln(1);
$pdf->Cell(5,0.5,'Tenaga Ahli',0,'L');
$pdf->Cell(5,0.5,':  '.$data['nama_ta'],0,'L');
$pdf->ln(1);
$pdf->Cell(5,0.5,'Status',0,'L');
$pdf->Cell(5,0.5,':  '.$data['status'],0,'L');
$pdf->ln(4);
}
$pdf->Output("laporan_order.pdf","I");

?>

