<?php 
function lenght($kalimat) {
    echo "Jadi ada kata : " . str_word_count($kalimat) . "<br>";
    echo "Jadi ada berapa huruf : " . strlen(str_replace(' ', '',$kalimat));
}

lenght('Halo Nama Saya');
?>