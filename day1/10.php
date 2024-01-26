<?php

$a = 154000;

if($a >= 100000){
    $a = $a - $a * 0.07;
    echo "$a";
}else{
    echo "tidak dapat";
}

?>