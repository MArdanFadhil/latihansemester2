<?php
$tahunAndi = 2004;
$tahunEko = $tahunAndi - 3;

function isKabisat($tahun) {
    return (($tahun % 4 == 0) && ($tahun % 100 != 0)) || ($tahun % 400 == 0);
}

echo isKabisat($tahunAndi) ? "Andi lahir di tahun kabisat." : "Andi tidak lahir di tahun kabisat.";
echo "<br>";
echo isKabisat($tahunEko) ? "Eko lahir di tahun kabisat." : "Eko tidak lahir di tahun kabisat.";

?>