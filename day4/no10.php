<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => '18000',
        'jumlah_barang' =>'1',
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => '5000',
        'jumlah_barang' => '3',
    ],
    [
        'nama_barang' => 'Aloe Vera Shaet Mask',
        'harga_barang' => '15000',
        'jumlah_barang' => '5',
    ]
];

$total_pembayaran = 0; 

foreach ($barang as $key => $isi) {
    $total_barang = $isi['harga_barang'] * $isi['jumlah_barang'];
    $total_pembayaran += $total_barang;

    echo " Barang : $isi[nama_barang]<br>";
    echo " Harga : $isi[harga_barang]<br>";
    echo " Jumlah : $isi[jumlah_barang]<br>";
    echo " Total : $total_barang<br>";
    echo "<br>";
}

echo "Yang Beni harus bayar: $total_pembayaran";
?>