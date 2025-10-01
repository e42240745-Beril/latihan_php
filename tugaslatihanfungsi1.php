<?php
// 1. Fungsi untuk menentukan bilangan terbesar
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$bil1 = 100;
$bil2 = 150;

echo "<h3>1) Menentukan Bilangan Terbesar</h3>";
echo "Bilangan 1 = $bil1 <br>";
echo "Bilangan 2 = $bil2 <br>";
echo "Bilangan terbesar adalah: <b>" . terbesar($bil1, $bil2) . "</b><br><br>";
?>
