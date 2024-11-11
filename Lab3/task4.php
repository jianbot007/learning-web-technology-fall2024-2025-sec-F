<?php

function LargestNum($number1,$number2,$number3){
$max = 0;

if($number1 > $max){
     $max = $number1;
}
if($number2 > $max){
   $max = $number2;
}
if($number3 > $max){
    $max = $number3;
}

echo "Highest number between $number1,$number2,$number3 is $max <br>";
}

LargestNum(61,89,100);
LargestNum(5,4,3);
LargestNum(1,6,3);

?>