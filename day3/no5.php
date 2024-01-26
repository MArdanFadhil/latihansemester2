<?php

$siswa = 'sakit';
$kehadiran = 100;
$sakitizin = 0.03;
$alfa = 0.05;

$hasil = $siswa == "alfa" ? $kehadiran - $kehadiran * $alfa : ($siswa == "sakit" || $siswa == "izin" ? $kehadiran - $kehadiran * $sakitizin : $kehadiran);
echo $hasil;

// $siswa = 'izin';
// $kehadiran = 100;

// $hasil = $siswa == 'izin' || $siswa == 'sakit' ? $kehadiran - 3 : ($kehadiran == 'alfa' ? $kehadiran  - 5 : $kehadiran);
// echo $hasil;

?>