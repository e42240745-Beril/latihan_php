<!DOCTYPE html>
<html>
<head>
    <title>Soal 1 - Data Siswa</title>
    <style>
        body { font-family: Arial; background-color: #fde6edff; }
        table { border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 6px 12px; }
        th { background-color: #c3e7ffff; }
    </style>
</head>
<body>
<h2>Soal 1 - Data Siswa</h2>

<?php
$siswa = [
    ["Ayra", 85, 90],
    ["Ayril", 78, 88],
    ["Ayyyy", 92, 95]
];

echo "Nilai Bahasa dari siswa ke-2: <b>" . $siswa[1][2] . "</b><br><br>";

echo "<table>";
echo "<tr><th>Nama</th><th>Matematika</th><th>Bahasa</th></tr>";
foreach ($siswa as $data) {
    echo "<tr><td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td></tr>";
}
echo "</table>";
?>
</body>
</html>
