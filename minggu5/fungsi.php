<?php

function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam. ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan Anda<br>";
}
perkenalan("Hamdana", "Hallo");
echo "<hr>";
$saya = "Elok";
$ucapanSalam = "Selamat Pagi";
perkenalan($saya);

echo "<hr>";
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(1988, 2023) . " tahun<br><br>";
?>