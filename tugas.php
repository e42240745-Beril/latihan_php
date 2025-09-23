<?php
// --- Nomor 1 ---
echo "<b>Nomor 1:</b><br>";
$x = "15";
$y = "25";
echo "String '15' + '25' = " . ($x + $y) . " (PHP melakukan type juggling dari string ke integer)<br><br>";

// --- Nomor 2 ---
echo "<b>Nomor 2:</b><br>";
echo "20 / 4 = " . (20/4) . " (pembagian menghasilkan bilangan bulat atau float)<br>";
echo "20 % 4 = " . (20%4) . " (modulo menghasilkan sisa pembagian)<br>";
echo "22 / 5 = " . (22/5) . " (contoh hasil pecahan)<br>";
echo "22 % 5 = " . (22%5) . " (sisa dari pembagian 22 dibagi 5)<br><br>";

// --- Nomor 3 ---
echo "<b>Nomor 3:</b><br>";
$str1 = "Belajar PHP itu mudah";
$str2 = "PHP bisa digunakan untuk membuat website dinamis";
$str3 = "Dia berkata: \"Coding itu menyenangkan!\"";
$str4 = "File berhasil tersimpan di D:\\project\\htdocs";
$str5 = "Baris ini tidak otomatis turun ke \n baris berikutnya";
$str6 = "Isi variabel tidak otomatis tampil: $str1 dan $str3";

// Gabungan string angka
$tugas1 = "100";
$tugas2 = "50";
$hasilGabung = $tugas1 . $tugas2; // hasilnya "10050"

echo $str1 . "<br>";
echo $str2 . "<br>";
echo $str3 . "<br>";
echo $str4 . "<br>";
echo nl2br($str5) . "<br>"; // pakai nl2br agar \n terbaca di HTML
echo $str6 . "<br>";
echo "Hasil penggabungan tugas1 dan tugas2 = " . $hasilGabung;
?>
