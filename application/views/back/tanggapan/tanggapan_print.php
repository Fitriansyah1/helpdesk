<?php


$pdf = new FPDF("P", "cm", "A4");
$pdf->AddPage();
$pdf->SetTitle("Laporan Data Tanggapan");

// Pindahkan logo ke atas (misalnya, dari y=1 ke y=0.5) dan ubah ukuran gambar
$pdf->Image('assets/back/dist/img/mas.jpg', 1, 0.5, 3, 2.25); // Adjusted position and size for the logo

// Tambahkan informasi kop surat
$pdf->SetFont("Arial", "B", 13);
$pdf->Cell(19, 1, "RSUD DR. H. MOCH. ANSARI SALEH BANJARMASIN", 0, 1, "C");
$pdf->SetFont("Arial", "", 9);
$pdf->Cell(19, 1, "Jl. Brig Jend. Hasan Basri No.1, Alalak Utara, Kec. Banjarmasin Utara, Kota Banjarmasin", 0, 1, "C");
$pdf->Line(1, 3.3, 20, 3.3);
$pdf->Ln();

// Judul Laporan
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(19, 1, "Laporan Data Tanggapan Perbaikaan", 0, 1, "C");
$pdf->Ln();

// Header Tabel
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(2, 1, "No", 1, 0, "C", true);
$pdf->Cell(5, 1, "Tanggapan", 1, 0, "C", true);
$pdf->Cell(4, 1, "Tanggal tanggapan", 1, 0, "C", true);
$pdf->Cell(4, 1, "Waktu Pengerjaan", 1, 0, "C", true);
$pdf->Cell(4, 1, "Nama Teknisi", 1, 1, "C", true);
$pdf->SetFont("Arial", "", 11);

// Isi Tabel
$no = 1;
foreach ($tanggapan as $row) {
    $pdf->Cell(2, 1, $no++, 1, 0, "C");
    $pdf->Cell(5, 1, $row->tanggapan, 1, 0, "C");

    // Format the timestamp
    $timestamp = date("d-m-Y", strtotime($row->waktu_tanggapan));
    $pdf->Cell(4, 1, $timestamp, 1, 0, "C");
    $pdf->Cell(4, 1, $row->waktu_pengerjaan, 1, 0, "C");
    $pdf->Cell(4, 1, $row->nama_teknisi, 1, 1, "C");
}

// Output PDF
$pdf->Output("I", "Laporan Data Tanggapan.pdf");
