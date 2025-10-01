<?php
// 2. Menampilkan Tanggal, Bulan, Tahun sekarang dengan getdate()
$sekarang = getdate();

echo "<h3>2) Tanggal Sekarang (fungsi getdate)</h3>";
echo "Tanggal sekarang adalah: <b>" 
     . $sekarang["mday"] . "-" 
     . $sekarang["mon"] . "-" 
     . $sekarang["year"] . "</b><br>";

// Tambahan keterangan untuk tanggal 1 Oktober
if ($sekarang["mday"] == 1 && $sekarang["mon"] == 10) {
    echo "Hari ini memperingati: <b>Hari Kesaktian Pancasila</b><br><br>";
}
?>

