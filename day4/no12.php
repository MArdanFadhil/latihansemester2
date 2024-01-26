<?php

$barang = [
        [ 'nama' => 'Ban', 'diskon' => '10' ],
        [ 'nama' => 'oli mesin'],
        [ 'nama' => 'kampas rem'],
        [ 'nama' => 'busi', 'diskon' => '9' ],
        [ 'nama' => 'akumulator', 'diskon' => '7' ],
];

foreach($barang as $diskon){
    if(array_key_exists('diskon', $diskon)){
        echo "<br>" . "Barang : " . $diskon['nama'] . "<br>" . "Diskon : " .$diskon['diskon'];
    }
}

//array_key_exists => mengembalikan nilai true jika kunci ada dan false jika kunci tidak ada.
?>