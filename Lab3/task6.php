<?php


$number = 8;
$Array = [2,9,8,10,15,16];
$position = -1;

for($i = 0; $i < Sizeof($Array); $i++){
if($number == $Array[$i]){
    $position = $i;
}
}


if ( $position != -1){
    echo "The Number $number found in index position : $position";

}
else {
    echo "Invalid Number";
}


?>