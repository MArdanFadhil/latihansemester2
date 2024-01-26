<?php

function hitungDiskonDanHadiah($totalBelanja) {
    $diskon = 0;
    $hadiah = '';

    if ($totalBelanja > 100000 && $totalBelanja <= 150000) {
        $diskon = 10000;
    } elseif ($totalBelanja > 150000) {
        $diskon = 30000;
        $hadiah = '1 dus permen kaki';
    }

    return array('diskon' => $diskon, 'hadiah' => $hadiah);
}

$totalBelanja = 160000; 
$hasilHitung = hitungDiskonDanHadiah($totalBelanja);

$diskon = $hasilHitung['disk'];
$hadiah = $hasilHitung['hadiah'];

echo "Total Belanja: Rp. " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Diskon: Rp. " . number_format($diskon, 0, ',', '.') . "<br>";

if (!empty($hadiah)) {
    echo "Hadiah: " . $hadiah . "<br>";
}

?>