<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus);
echo "<br>";
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eve', 6]
];

$karyawanpengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanpengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman lebih dari 5 tahun: " . implode(", ", $karyawanpengalamanLimaTahun)  . "<br><br> ";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<br>";
$mataKuliah2 = "Matematika";

$jumlahNilai =0;
$jumlahOrang = 0;

foreach ($daftarNilai[$mataKuliah2] as $nilai) {
    $jumlahNilai += $nilai[1];   
    $jumlahOrang++;
}
$rata = $jumlahNilai/$jumlahOrang;

echo "Nilai Rata-rata: $rata <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    if ($nilai > $rata) {
        echo "{$nilai[0]} dapat {$nilai[1]} <br>";   
    }
}
?>
