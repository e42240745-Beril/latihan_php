<!DOCTYPE html>
<html>
<head>
    <title>Soal 2 - Data Buah</title>
    <style>
        body { font-family: Arial; background-color: #fffacd; }
        table { border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 6px 12px; }
        th { background-color: #ffc7c7ff; }
    </style>
</head>
<body>
<h2>Soal 2 - Data Buah</h2>

<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

echo "Nama buah pertama: <b>" . $buah[0][0] . "</b><br>";

$total = 0;
foreach ($buah as $b) {
    $total += $b[1] * $b[2];
}
echo "Total nilai stok * harga semua buah: <b>Rp" . number_format($total, 0, ',', '.') . "</b><br><br>";

echo "<table>";
echo "<tr><th>Nama</th><th>Harga</th><th>Stok</th></tr>";
foreach ($buah as $b) {
    echo "<tr><td>{$b[0]}</td><td>Rp" . number_format($b[1], 0, ',', '.') . "</td><td>{$b[2]}</td></tr>";
}
echo "</table>";
?>
</body>
</html>
