<!DOCTYPE html>
<html>
<head>
    <title>Soal 3 - Produk E-Commerce</title>
    <style>
        body { font-family: Arial; background-color: #ffffffff; }
        table { border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 6px 12px; }
        th { background-color: #98ff98ff; }
    </style>
</head>
<body>
<h2>Soal 3 - Produk E-Commerce</h2>

<?php
$produk = [
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 8000000, "rating" => 4.5],
    ["nama" => "Headphone", "kategori" => "Aksesoris", "harga" => 250000, "rating" => 4.7],
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 6000000, "rating" => 4.8]
];

$maxHarga = 0;
$produkTertinggi = "";
foreach ($produk as $p) {
    if ($p["harga"] > $maxHarga) {
        $maxHarga = $p["harga"];
        $produkTertinggi = $p["nama"];
    }
}

echo "Produk dengan harga tertinggi: <b>$produkTertinggi</b><br><br>";

echo "<table>";
echo "<tr><th>Nama</th><th>Kategori</th><th>Harga</th><th>Rating</th></tr>";
foreach ($produk as $p) {
    echo "<tr><td>{$p['nama']}</td><td>{$p['kategori']}</td><td>Rp" . number_format($p['harga'], 0, ',', '.') . "</td><td>{$p['rating']}</td></tr>";
}
echo "</table>";
?>
</body>
</html>
