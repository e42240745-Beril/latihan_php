<?php
class Buku {
    private $dataBuku = [
        ["id" => 1, "judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
        ["id" => 2, "judul" => "Bumi Manusia", "pengarang" => "Pramoedya Ananta Toer", "tahun" => 1980],
        ["id" => 3, "judul" => "Negeri 5 Menara", "pengarang" => "Ahmad Fuadi", "tahun" => 2009],
    ];

    // Mengambil semua data buku
    public function getAllBuku() {
        return $this->dataBuku;
    }
}
?>
