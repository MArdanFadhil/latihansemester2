<?php

$tabungan = 850000;
$hasil = $tabungan >= 500000 ? $tabungan + 500000 * 0.05 : $tabungan;
echo $hasil;

?>