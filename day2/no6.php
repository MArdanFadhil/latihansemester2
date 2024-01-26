<?php

$berat_badan = 44; 
$tinggi_badan = 148; 

$tinggi_badan_m = $tinggi_badan / 100; 
$imt = $berat_badan / ($tinggi_badan_m * $tinggi_badan_m);

if ($imt < 18.5) {
    $kategori = "Berat badan kurang";
} elseif ($imt >= 18.5 & $imt < 22.9) {
    $kategori = "Normal";
} elseif ($imt >= 22.9 & $imt < 24.9) {
    $kategori = "Berat badan lebih";
} else {
    $kategori = "Obesitas";
}

echo "Berat badan Beni: $berat_badan kg<br>";
echo "Tinggi badan Beni: $tinggi_badan cm<br>";
echo "IMT Beni: $imt<br>";
echo "Kategori IMT Beni: $kategori";

?>
