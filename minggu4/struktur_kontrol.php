<?php

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget ) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. <br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah $jumlahBuah <br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor ) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah $totalSkor<br><br>";

$nilaiMahasiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiMahasiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br>";

// Tugas 1
$nilaiMahasiswa2 = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

sort($nilaiMahasiswa2);

$nilai = array_slice ($nilaiMahasiswa2, 2, count($nilaiMahasiswa2) - 4);
$rata = array_sum($nilai) / count($nilai);

echo "Nilai rata-rata kelas: $rata <br><br>";


// Tugas 2
echo "<br>";
$hargaProduk = 120000;
$diskon = $hargaProduk * 0.2;
$bayar = $hargaProduk -$diskon;
echo  "Yang harus dibayar oleh pelanggan: $bayar <br><br>";

// tugas 3
$poinSeorang=[100,200,300, 400];
$totalPoin =0;

foreach ($poinSeorang as $poin) {
    $totalPoin += $poin;
}

echo "Total skor pemain adalah: $totalPoin <br>";

if ($totalPoin > 500) {
    echo "Apakah pemain mendapatkan mendapatkan hadiah? Ya <br>";
} else {
    echo "Apakah pemain mendapatkan mendapatkan hadiah? Tidak <br>";
}

?>