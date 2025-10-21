<?php
class BukuView {
    public function tampilkan($bukuList) {
        echo "<h2>📚 Daftar Buku Perpustakaan</h2>";
        echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse; background-color:#ffe4e1;'>";
        echo "<tr style='background-color:#ffb6c1;'>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
              </tr>";

        foreach ($bukuList as $b) {
            echo "<tr>
                    <td>{$b['judul']}</td>
                    <td>{$b['pengarang']}</td>
                    <td>{$b['tahun']}</td>
                  </tr>";
        }

        echo "</table>";
    }
}
?>
