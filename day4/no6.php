<?php
$a = 0;

for($i=5; $i <= 25; $i +=5){
    if(225 % $i == 0){
        $a++;
    }
}
echo "kemungkinan bisa dibagi 225 adalah $a";


?>