<?php
// Mendefinisikan variabel-variabel yang diperlukan
$pemasukan = 50000000;   // Pemasukan
$hutang_a = 16500000;     // Hutang A
$bunga_a = 5 / 100;      // Bunga Hutang A dalam bentuk desimal (5%)
$hutang_b = 9500000;      // Hutang B
$bunga_b = 4.5 / 100;    // Bunga Hutang B dalam bentuk desimal (4.5%)

// Menghitung bunga hutang A dan B
$bunga_hutang_a = $hutang_a * $bunga_a;
$bunga_hutang_b = $hutang_b * $bunga_b;

// Menghitung total bunga hutang
$total_bunga_hutang = $bunga_hutang_a + $bunga_hutang_b;

// Menghitung jumlah total hutang (hutang pokok + bunga)
$total_hutang = $hutang_a + $bunga_hutang_a + $hutang_b + $bunga_hutang_b;

// Menghitung sisa uang setelah membayar hutang dan bunga
$sisa_uang = $pemasukan - $total_hutang;

// Menampilkan hasil perhitungan
echo "Sisa uang: Rp " . number_format($sisa_uang, 0, ',', '.') . "\n";
echo "Jumlah total bunga hutang: Rp " . number_format($total_bunga_hutang, 0, ',', '.') . "\n";
echo "Jumlah total hutang: Rp " . number_format($total_hutang, 0, ',', '.') . "\n";
?>
