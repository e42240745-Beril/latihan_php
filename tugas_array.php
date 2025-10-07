<?php
// Matriks A
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Matriks hasil
$hasil = [];

// Proses penjumlahan menggunakan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $hasil[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Tampilkan hasil
echo "<h3>Hasil penjumlahan matriks A dan B adalah:</h3>";

echo "<table border='1' cellpadding='10' style='background-color:pink; border-collapse:collapse;'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>".$hasil[$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>




