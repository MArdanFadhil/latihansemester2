<?php
function nilai($bb, $tb){ 
    $imt = $bb / (($tb/100) **2);

    if ($imt < 18.5) {
        echo "Berat badan kurang";
    } elseif ($imt >= 18.5 & $imt < 22.9) {
        echo "Normal";
    } elseif ($imt >= 22.9 & $imt < 24.9) {
        echo "Berat badan lebih";
    } else {
        echo "Obesitas";
    }
}

nilai(44, 148);
?>

<br>

<?php

function hari($tanggal){
    $hari = date('l', strtotime($tanggal));

    if ($hari == 'Monday') {
        echo 'Senin';
    } elseif ( $hari == 'Tuesday'){
        echo 'Selasa';
    } elseif ( $hari == 'Wednesday'){
        echo 'Rabu';
    } elseif ( $hari == 'Thursday'){
        echo 'Kamis';
    } elseif ( $hari == 'Friday'){
        echo 'Jumat';
    } elseif ( $hari == 'Saturday'){
        echo 'Sabtu';
    } else {
        echo 'Minggu';
    }
}

hari('25-01-2024');
?>