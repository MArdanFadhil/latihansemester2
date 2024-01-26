<?php

function hitungKompensasi($jamMasuk, $jamPulang, $jamKerja, $tarifKompensasi) {
    $jamLembur = max(0, $jamPulang - $jamKerja - $jamMasuk);
    if ($jamLembur > 0) {
        return $jamLembur * $tarifKompensasi;
    } else {
        return $jamKerja * $tarifKompensasi;
    }
}

$jamMasuk = 8;
$jamPulang = 22;
$jamKerja = 8;
$tarifKompensasi = 30000;
$kompensasiDani = hitungKompensasi($jamMasuk, $jamPulang, $jamKerja, $tarifKompensasi);
echo "Kompensasi yang akan diterima Dani adalah Rp. " . number_format($kompensasiDani, 2, ',', '.');

?>