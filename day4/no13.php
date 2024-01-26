<?php

$data = [
    [
        'nama' => 'Andi',
        'tahun' => '2008',
    ],
    [
        'nama' => 'Beni',
        'tahun' => '2001',
    ],
    [
        'nama' => 'Dani',
        'tahun' => '2004',
    ],
    [
        'nama' => 'Eko',
        'tahun' => '2006',
    ],
]; 

echo "nama yang lahir ditahun kabisat adalah : ";

foreach ($data as $nama){
    $tahun = $nama['tahun'];
    if($tahun % 4 == 0){
        echo $nama['nama'] . " ";
    }
}

?>