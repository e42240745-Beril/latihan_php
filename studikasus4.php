<?php
// 4. Validasi Nilai Ujian
echo "<h3>4. Validasi Nilai</h3>";
$nilai = 75;

if ($nilai < 0 || $nilai > 100) {
    echo "Nilai tidak valid! Harus antara 0 - 100.<br>";
} else {
    echo "Nilai valid: $nilai<br>";
}
