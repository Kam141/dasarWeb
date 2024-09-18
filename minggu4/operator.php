<?php
$a = 10;
$b =5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan $a dan $b adalah $hasilTambah <br>";
echo "Hasil pengurangan $a dan $b adalah $hasilKurang <br>";
echo "Hasil perkalian $a dan $b adalah $hasilKali <br>";
echo "Hasil pembagian $a dan $b adalah $hasilBagi <br>";
echo "Hasil sisa pembagian $a dan $b adalah $sisaBagi <br>";
echo "Hasil pangkat $a dan $b adalah $pangkat <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama  = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo $hasilTidakSama;

echo "Hasil penyamaan $a == $b adalah $hasilSama <br>";
echo "Hasil penyamaan $a != $b adalah $hasilTidakSama <br>";
echo "Hasil penyamaan $a < $b adalah $hasilLebihKecil <br>";
echo "Hasil penyamaan $a > $b adalah $hasilLebihBesar <br>";
echo "Hasil penyamaan $a <= $b adalah $hasilLebihKecilSama <br>";
echo "Hasil penyamaan $a >= $b adalah $hasilLebihBesarSama <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil penyamaan $a && $b adalah $hasilAnd <br>";
echo "Hasil penyamaan $a || $b adalah $hasilOr <br>";
echo "Hasil penyamaan !$a adalah $hasilNotA <br>";
echo "Hasil penyamaan !$b adalah $hasilNotB <br><br>";

echo  $a += $b;
echo "<br>";
echo $a -= $b;
echo "<br>";
echo $a *= $b;
echo "<br>";
echo $a /= $b;
echo "<br>";
echo $a %= $b;
echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil penyamaan $a === $b adalah $hasilIdentik <br>";
echo "Hasil penyamaan $a !== $b adalah $hasilTidakIdentik <br><br>";

$kursi = 45;

$diTempati = $kursi - 28;
$prosentase = $diTempati / $kursi * 100;

echo "Persentase kursi yang di tempati: $prosentase% <br>";
?>