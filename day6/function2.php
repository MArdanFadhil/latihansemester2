<?php

function nilai($angka1, $operator, $angka2){
    if($operator == '+'){
        $hasil = $angka1 + $angka2;
    }elseif($operator == '-'){
        $hasil = $angka1 - $angka2;
    }elseif($operator == '*'){
        $hasil = $angka1 * $angka2;
    }elseif($operator == '/'){
        $hasil = $angka1 / $angka2;
    }else{
        echo "Operator tidak terdeteksi";
    }

    return "hasil dari $angka1 $operator $angka2 adalah $hasil";
}

echo nilai(1, '*' ,2) . "<br>";


echo round(1.60) . "<br>";
//round => untuk membulatkan lebih dari lima keatas, sedangkan kurang dari lima kebawah

echo str_repeat("Hello World ", 2) . "<br>";
//mengulang kalimat hello world sebanyak 2kali atau lebih

echo str_word_count("Hello World") . "<br>";
//menghitung jumlah kata yang ditemukan dalam string hello world

$str = "hello";
echo str_replace("e", "o", $str) . "<br>";
//mengubah huruf yang diinginkan

$date = date_create("2020-05-01");
date_modify($date, "+4 days");
echo "Setelah ditambah 4 hari : " . date_format($date, "Y-m-d") . "<br>";
//date_modify untuk menentukan tanggal yang ditambah
//date_create membuat tahun-bulan-tanggal
//date_format mengembalikkan/memperbaharui tanggal baru

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 =" . sum(5,10) . "<br>";
echo "7 + 13 =" . sum(7,13) . "<br>";
//sum untuk aritmatika

// $string1 = "Saya Tinggal Di Bogor";
// $string2 = "Tinggal";

// $jumlah = strpos($string1, $string2);

// if($jumlah !== false) {
//     echo "Substring '$string2' di temukan pada posisi $jumlah" . "<br";
// } else {
//     echo "Substring '$string' tidak di temukan dalam string" . "<br>";
// }
//strpos => menemukan posisi kemunculan pertama pada variabel $string2

$angka_acak = rand(1, 100);
echo "Angka acak antara 1 dan 100: " . $angka_acak . "<br>";

$data = "hello";
echo strtoupper($data) . "<br>" ;
//strtoupper => untuk mengkapitalkan huruf

$date = [1,2,3];

if(is_array($date)) {
    echo "Data adalah array" . "<br>";
} else {
    echo "Data bukan array" . "<br>";
}

$kendaraan = array('Mobil', 'Motor', 'Sepeda');
$upper = array_map(function($value) {
    return strtoupper($value);
}, $kendaraan);
echo '<pre>'; print_r($upper) . "<br>";

$asal = array("jeruk", "pisang", "apel", "stoberi");
$buah = array_pop($asal);
print_r($asal) . "<br>";
//array_pop => menghapus element terakhir

$nama = "BUDI";
echo strtolower($nama) . "<br>";
//untuk mengecilkan huruf

echo sqrt(100) . "<br";


$kata = "hello world";
echo "jumlah kata" . strlen($kata);

if (strlen($kata) > 8) {
    echo "kata '$kata' memiliki lebih dari 8 huruf" .  "<br";
}else {
    echo "kata '$kata' kurang dari 8 huruf" .  "<br";
}

// array_sum
$nilai = [
    [
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [ 
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($nilai as $nilai_akhir) {
    $nilai = $nilai_akhir['nilai'];
    
    $totalNilai = array_sum($nilai);

    echo "Jumlah Nilai: $totalNilai\n";
}

//fungsi
$rmbl = ['PPLG XI-5', 'PPLG XI-4', 'PPLG XI-3', 'PPLG XI-2', 'PPLG XI-1'];
array_reverse($rmbl);
print_r($rmbl);

$angka = ['1','4','5','10','2'];
arsort ($angka);
print_r($angka);
//nilai menurun

//(bila nila minus -2 diubah menjadi nilai absolut )
echo(abs(6.7) . " ");
echo(abs(-6.7) . " ");
echo(abs(-3) . " ");
echo(abs(93));

?>