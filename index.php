<?php

// Menentukan jumlah pertanyaan dalam SUS
$jumlah_pertanyaan = 10;

// Menentukan skor untuk setiap pertanyaan
$skor_pertanyaan = array(
    5, 
    4, 
    5, 
    4, 
    5, 
    4, 
    5, 
    4, 
    5, 
    4
);

// Menghitung skor total SUS
$skor_total = 0;
for ($i = 0; $i < $jumlah_pertanyaan; $i++) {
    $skor_total += $skor_pertanyaan[$i];
}

// Menghitung nilai SUS
$nilai_SUS = ($skor_total / $jumlah_pertanyaan) * 2.5;

// Menampilkan nilai SUS
echo "Nilai SUS adalah: " . $nilai_SUS;

?>
