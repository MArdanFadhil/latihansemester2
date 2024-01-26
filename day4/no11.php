<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];
$kelompok1 = [];
$kelompok2 = [];

foreach($bil1 as $bil){
    if (in_array($bil, $bil2)){
        $kelompok1[] = $bil;
    } else {
        $kelompok2[] = $bil;
    }
}

foreach($bil2 as $bil){ 
    if (!in_array($bil, $bil1)){
        $kelompok2[] = $bil;
    }
}

echo "kelompok 1 bilangan yang terdapat di kedua variabel " . implode(", ", $kelompok1);
echo "<br>";
echo "kelompok 2 bilangan yang hanya terdapat disalah satu variabel saja " . implode(", ", $kelompok2);
 
//implode => untuk memecah atau mencari atau menjadikan sebuah array
//cara cepatnya memakai function array_dif
//in_array => mencari array untuk nilai tertentu.
//Catatan: Jika parameter pencarian adalah string dan parameter tipe diatur ke TRUE, pencarian peka huruf besar-kecil.
?>