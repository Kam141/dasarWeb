<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1+$angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.". "\n";

$benar = true;
$salah = false;
echo "variabel benar: $benar, variabel salah: $salah"."\n";

define("NAMA_SITUS", "WebsiteKu.com");
define("Tahun_Pendirian", 2023);

echo "Selamat datang di " .NAMA_SITUS . ", situs yang didirikan pada tahun " . Tahun_Pendirian . ".";
?>