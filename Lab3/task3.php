<?php

function OddorEven($number = 0){
if($number % 2 == 0){
    echo "$number is even<br>";
}
else{
    echo "$number is odd<br>";
}
}

OddorEven(9);
OddorEven(10);
?>