<?php
// definisikan variable konstanta
define ('PHI', 3.14);

// soal 1 hitunglah luas lingkaran dengan jari jari 8
// soal 2 hitunglah keliling lingkaran dengan jari jari 8

// definisikan variable jari2
$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo "Luas lingkaran dengan jari-jari $jari adalah $luas";
echo '<br/> keliling lingkaran dengan jari-jari ' . $jari . 'adalah' . $kll;

?>