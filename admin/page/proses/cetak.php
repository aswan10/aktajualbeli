<?php
// memanggil library FPDF
require('fpdf.php');
include '../../../config.php';

	$no_akta = $_GET ['id'];


	$sql = $koneksi->query("SELECT * FROM akta WHERE no_akta='$no_akta'");

// WHERE no_akta='$no_akta' 

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
$pdf->SetMargins(40,10,30);
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',25);
// mencetak string 
$pdf->Cell(0,7,'PEJABAT PEMBUAT AKTA TANAH',0,1,'C');

$pdf->SetFont('Arial','B',25);
$pdf->Cell(0,7,'(PPAT)',0,1,'C');

$pdf->SetFont('Arial','B',20);
$pdf->Cell(0,7,'HJ. NIDYA HARUN IRHAM, S.H.,M.Kn.',0,1,'C');

$pdf->SetFont('Arial','',15);
$pdf->Cell(0,7,'DAERAH KERJA Kota Makassar',0,1,'C');

$pdf->SetFont('Arial','',15);
$pdf->Cell(0,7,'SK.  Menteri Agraria dan Tata Ruang / Kepala Badan Pertanahan Nasional',0,1,'C');

$pdf->SetFont('Arial','',15);
$pdf->Cell(0,7,'Nomor : 593-XVII-2006',0,1,'C');

$pdf->SetFont('Arial','',15);
$pdf->Cell(0,7,'Tanggal 18 Desember 2006',0,1,'C');

$pdf->SetFont('Arial','',15);
$pdf->Cell(0,7,'Jalan Rusa Nomor 08 Maricaya - Makassar',0,1,'C');

$pdf->SetFont('Arial','B',20);
$pdf->Cell(0,7,'_______________________________________',0,1,'C');

$pdf->SetFont('Arial','B',20);
$pdf->Cell(0,7,'AKTA JUAL BELI',0,1,'C');

while ($data=$sql->fetch_assoc()) {

$pdf->SetFont('Arial','',15);
$pdf->Cell(0,7,'Nomor : '. $data['no_akta'].'/'. date('Y'),0,1,'C');

$pdf->SetFont('Arial','',5);
$pdf->Cell(0,2,'',0,1,'C');

$pdf->SetFont('Arial','',15);
$pdf->Cell(0,7,'Lembar Pertama',0,1,'C');

$pdf->SetFont('Arial','',5);
$pdf->Cell(0,2,'',0,1,'C');

date_default_timezone_set('Asia/Makassar');

$pdf->SetFont('Arial','',15);
$pdf->MultiCell(0,5, 'Pada hari ini, tanggal, '. date('d F, Y').' Pukul '. date('h:i:s A').' WITA. yang berdasarkan Surat Keputusan Mentri Agraria dan Tata Ruang / Kepala Badan Pertanahan Nasional tanggal 29 Oktober 2003, nomor-17-XXX-2003, diangkat sebagai Pejabat Pembuat Akta Tanah, yang selanjutnya disebut PPAT. yang dimaksud dalam pasal 7 Peraturan Pemerintah Nomor 24 Tahun 1997 tentang Pendaftaran Tanah, dengan daerah kerja Kota Makassar dan berkantor di Jalan Rusa Nomor 08, Sulawesi Selatan.',0,'J');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',20);
$pdf->Cell(0,7,'_______________________________________',0,1,'C');

$pdf->SetFont('Arial','',10);
$pdf->Cell(10,7,'Akta Jual Beli',0,1);

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(10,7,'PPAT : Hj. NIDYA HARUN IRHAM, S.H.,M.Kn.',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(10,7,'Daerah Kerja : Kota Makassar',0,1);

 }

$pdf->Output();
?>
