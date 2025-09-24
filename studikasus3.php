<?php
// 3. Cek Cuaca dengan Switch
echo "<h3>3. Aktivitas Berdasarkan Cuaca</h3>";
$cuaca = "cerah";

switch ($cuaca) {
    case "cerah":
        echo "Aktivitas: Jalan-jalan di taman.<br>";
        break;
    case "mendung":
        echo "Aktivitas: Siapkan jas hujan sebelum keluar.<br>";
        break;
    case "hujan":
        echo "Aktivitas: Lebih baik di rumah, baca buku.<br>";
        break;
    default:
        echo "Aktivitas: Tidak diketahui.<br>";
        break;
}