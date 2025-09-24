<?php
// 2. Cek Status Pembayaran
echo "<h3>2. Status Pembayaran</h3>";
$status = "lunas";

if ($status == "lunas") {
    echo "Pembayaran sudah LUNAS.<br>";
} elseif ($status == "cicilan") {
    echo "Pembayaran masih dalam CICILAN.<br>";
} else {
    echo "Pembayaran BELUM dilakukan.<br>";
}