<?php

$nilaiUjian = 85;
$predikat = ($nilaiUjian > 90) ? "A" : (($nilaiUjian > 75) ? "B" : "C");

echo "Nilai ujian: " . $nilaiUjian . "<br>";
echo "Predikat: " . $predikat;

?>