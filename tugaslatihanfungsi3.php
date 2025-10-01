<?php
// 3. Menampilkan Tanggal, Bulan, Tahun sekarang dengan date()
echo "<h3>3) Tanggal Sekarang (fungsi date)</h3>";
$tanggal = date('d-F-Y');
echo "Tanggal sekarang adalah: <b>$tanggal</b><br>";

// Tambahan keterangan untuk tanggal 1 Oktober
if (date('d-m') == '01-10') {
    echo "Hari ini memperingati: <b>Hari Kesaktian Pancasila</b><br>";
}
?>
