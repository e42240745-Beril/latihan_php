<?php
echo "<h2>Studi Kasus Perulangan Stok Kerudung Pashmina</h2>";

// --- FOR ---
echo "<h3>Contoh FOR: Daftar Stok Pashmina</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo "Kerudung Pashmina ke-$i <br>";
}

// --- WHILE ---
echo "<h3>Contoh WHILE: Pengecekan Stok</h3>";
$stok = 5;
while ($stok > 0) {
    echo "Masih ada stok pashmina: $stok pcs <br>";
    $stok--;
}
echo "Stok habis!<br>";

// --- FOREACH ---
echo "<h3>Contoh FOREACH: Warna Pashmina</h3>";

$warna = [
    "Merah" => "red",
    "Kuning" => "yellow",
    "Hijau" => "green"
];

echo "<table border='1' cellpadding='8' cellspacing='0' 
      style='border-collapse:collapse; text-align:center; width:300px;'>";
echo "<tr style='background-color:#007acc; color:white;'>
        <th>No</th><th>Warna Pashmina</th>
      </tr>";

$no = 1;
foreach ($warna as $nama => $bg) {
    echo "<tr>
            <td>$no</td>
            <td style='background-color:$bg; color:black;'>$nama</td>
          </tr>";
    $no++;
}
echo "</table>";
?>





