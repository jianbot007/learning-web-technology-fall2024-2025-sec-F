<?php

function Sum($minNum,$maxNum){
     $sum = 0;
    for($i = $minNum; $i <= $maxNum; $i++ ){
        if($i % 2 != 0){
           $sum = $sum + $i;
        }


    }


echo "Sum between Odd number from $minNum to $maxNum is  $sum<br>";
}


Sum(10,100);
Sum(1,3);

?>