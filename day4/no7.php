<?php

$name = [
[
    'nama' => 'andi',
    'rombel' => 'pplg xi-1',
    'rayon' => 'ciawi 4',
    'jk' => 'l',
],
[
    'nama' => 'sasa',
    'rombel' => 'pplg xi-6',
    'rayon' => 'sukasari 1',
    'jk' => 'p',
],
[
    'nama' => 'lala',
    'rombel' => 'pplg xi-3',
    'rayon' => 'cisarua 3',
    'jk' => 'p',
],
[
    'nama' => 'beni',
    'rombel' => 'pplg xi-2',
    'rayon' => 'cicurug 2',
    'jk' => 'l',
],

];

foreach($name as $kunci =>$isi) {
    echo "nama : " . $isi['nama'] ."<br>";
    echo "rombel : " .$isi['rombel'] . "<br>";
    echo "rayon : " .$isi['rayon'] . "<br>";
    echo "jk : " . $isi['jk'] . "<br>";
}
?>