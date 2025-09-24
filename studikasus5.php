<?php
// 5. Cek Ongkir (Gratis Ongkir)
echo "<h3>5. Cek Ongkir</h3>";
$totalBelanja = 60000;

if ($totalBelanja >= 50000) {
    echo "Total belanja Rp$totalBelanja, Anda dapat GRATIS ONGKIR!<br>";
} else {
    $ongkir = 10000;
    $bayar = $totalBelanja + $ongkir;
    echo "Total belanja Rp$totalBelanja + Ongkir Rp$ongkir = Rp$bayar<br>";
}
?>