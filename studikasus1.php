<?php
// 1. Cek Usia untuk Kategori
echo "<h3>1. Cek Usia</h3>";
$usia = 20;

if ($usia < 12) {
    echo "Kategori: Anak-anak<br>";
} elseif ($usia < 18) {
    echo "Kategori: Remaja<br>";
} elseif ($usia < 60) {
    echo "Kategori: Dewasa<br>";
} else {
    echo "Kategori: Lansia<br>";
}
