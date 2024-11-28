<?php
// Meminta input dari pengguna
$input = readline("Masukkan angka: 12345");

// Inisialisasi variabel untuk jumlah total digit
$totalDigit = 0;

// Menggunakan perulangan untuk menghitung jumlah digit
for ($i = 0; $i < strlen($input); $i++) {
    // Menambahkan nilai digit pada posisi ke-$i dalam input ke totalDigit
    $totalDigit += (int)$input[$i];
}

// Menampilkan hasil
echo "Jumlah total digit: $totalDigit\n";
?>
