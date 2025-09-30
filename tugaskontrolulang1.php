<?php
echo "<h2>Nomor 1: Daftar Stok Pashmina</h2>";

echo "<table border='1' cellpadding='6' cellspacing='0' 
      style='border-collapse:collapse; text-align:center; width:400px;'>";
echo "<tr style='background-color:#007acc; color:white;'>
        <th>No</th><th>Stok Pashmina</th>
      </tr>";

// tampil stok pashmina ke-100 sampai ke-1000
$no = 1;
for($i=100; $i<=1000; $i++) {
    // warna selang-seling
    $bg = ($no % 2 == 0) ? "#79fbffff" : "#ffaeaeff";
    echo "<tr style='background-color:{$bg};'>
            <td>{$no}</td>
            <td>Stok Pashmina ke-{$i}</td>
          </tr>";
    $no++;
}

echo "</table>";
?>


