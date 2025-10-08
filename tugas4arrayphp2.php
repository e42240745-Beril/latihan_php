<!DOCTYPE html>
<html>
<head>
    <title>Soal 4 - Array 3x3</title>
    <style>
        body { font-family: Arial; background-color: #e0f7ff; }
        table { border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; }
        td { width: 40px; text-align: center; background-color: #e6ea9bff; }
    </style>
</head>
<body>
<h2>Soal 4 - Array 3x3</h2>

<?php
$angka = [
    [2, 4, 7],
    [3, 9, 1],
    [5, 8, 6]
];

$total = 0;
echo "<table>";
foreach ($angka as $baris) {
    echo "<tr>";
    foreach ($baris as $nilai) {
        echo "<td>$nilai</td>";
        $total += $nilai;
    }
    echo "</tr>";
}
echo "</table><br>";

echo "Jumlah total semua elemen: <b>$total</b>";
?>
</body>
</html>
