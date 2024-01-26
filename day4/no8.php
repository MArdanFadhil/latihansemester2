<?php

$angka = [75,77,87,70,90,81,69,87,66];

$kompeten = [];
$belum_kompeten = [];

foreach ($angka as $angka2 ) {
    if($angka2 >= 75) {
        $kompeten[] = $angka2;
    } else {
        $belum_kompeten[] = $angka2;
    }
}

echo "angka kompeten : ";
foreach($kompeten as $angka2){
    echo "<br>";
    echo $angka2;
}
echo "<br>";
echo "angka tidak kompeten : ";
foreach($belum_kompeten as $angka2){
    echo "<br>";
    echo $angka2;
}

?>