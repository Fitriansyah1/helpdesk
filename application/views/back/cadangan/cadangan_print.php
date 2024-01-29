<?php

$pdf = new FPDF("P", "cm", "A4");
$pdf->AddPage();
$pdf->SetTitle("Laporan Data Cadangan Komputer");

// Pindahkan logo ke atas dan ubah ukuran gambar
$pdf->Image('assets/back/dist/img/mas.jpg', 1, 0.5, 3, 2.25);

// Tambahkan informasi kop surat
$pdf->SetFont("Arial", "B", 13);
$pdf->Cell(19, 1, "RSUD DR. H. MOCH. ANSARI SALEH BANJARMASIN", 0, 1, "C");
$pdf->SetFont("Arial", "", 9);
$pdf->Cell(19, 1, "Jl. Brig Jend. Hasan Basri No.1, Alalak Utara, Kec. Banjarmasin Utara, Kota Banjarmasin", 0, 1, "C");
$pdf->Line(1, 3.3, 20, 3.3);
$pdf->Ln();

// Judul Laporan
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(19, 1, "Laporan Data Cadangan Komputer", 0, 1, "C");
$pdf->Ln();

// Header Tabel
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(1, 1, "No", 1, 0, "C", true);
$pdf->Cell(3, 1, "ID Cadangan", 1, 0, "C", true); // Adjusted width
$pdf->Cell(6, 1, "Nama Cadangan", 1, 0, "C", true); // Increased width
$pdf->Cell(4, 1, "Tipe Cadangan", 1, 0, "C", true);
$pdf->Cell(2, 1, "Jumlah", 1, 0, "C", true); // Adjusted width
$pdf->Cell(3, 1, "Kondisi", 1, 1, "C", true); // Adjusted width
$pdf->SetFont("Arial", "", 11);

// Isi Tabel
$no = 1;
foreach ($cadangan as $row) {
    $pdf->Cell(1, 1, $no++, 1, 0, "C");
    $pdf->Cell(3, 1, $row->id_cadangan, 1, 0, "C");
    $pdf->Cell(6, 1, $row->nama_cadangan, 1, 0, "C");
    $pdf->Cell(4, 1, $row->tipe_cadangan, 1, 0, "C");
    $pdf->Cell(2, 1, $row->jumlah, 1, 0, "C");
    $pdf->Cell(3, 1, $row->kondisi, 1, 1, "C");
}

// Output PDF
$pdf->Output("I", "Laporan Data Cadangan Komputer.pdf");
