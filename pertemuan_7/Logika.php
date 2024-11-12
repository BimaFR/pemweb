<?php
// Menggunakan if sederhana
echo "Masukkan nilai (0-100): ";
$nilai = trim(fgets(STDIN));

if ($nilai >= 90) {
    echo "Nilai Anda A\n";
}

// Menggunakan if/else
if ($nilai >= 80 && $nilai < 90) {
    echo "Nilai Anda B\n";
} elseif ($nilai >= 70 && $nilai < 80) {
    echo "Nilai Anda C\n";
} elseif ($nilai >= 60 && $nilai < 70) {
    echo "Nilai Anda D\n";
} else {
    echo "Nilai Anda E\n";
}

// Menggunakan switch case
echo "Masukkan pilihan angka (1-5): ";
$pilihan = trim(fgets(STDIN));

switch ($pilihan) {
    case 1:
        echo "Pilihan Anda adalah 1\n";
        break;
    case 2:
        echo "Pilihan Anda adalah 2\n";
        break;
    case 3:
        echo "Pilihan Anda adalah 3\n";
        break;
    case 4:
        echo "Pilihan Anda adalah 4\n";
        break;
    case 5:
        echo "Pilihan Anda adalah 5\n";
        break;
    default:
        echo "Pilihan tidak valid!\n";
        break;
}
?>
