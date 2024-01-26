<?php

$waktu = 19;
$menit = '00';
$waktu1 = 8;
$menit1 = '55';

$hasil = $waktu > 12 ? $waktu - 12 . '.' . $menit . "pm" : $waktu. '.' .$menit . "am";
echo $hasil . "<br>";

$hasil1 = $waktu1 > 12 ? $waktu1 - 12 . '.' . $menit1 . "pm" : $waktu1. '.' .$menit1 . "am";
echo $hasil1;

?>
