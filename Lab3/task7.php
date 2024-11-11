<?php


for( $i = 0 ; $i < 3 ; $i++){
    echo "<br>";
   for($j = $i ; $j >= 0; $j--){
    echo "*";
}
}


for( $i = 2 ; $i >= 0 ; $i--){
    echo "<br>";
    $num =1;
   for($j = $i ; $j >= 0; $j--){
    echo "$num";
    $num++;
}
}

$Sign = 'A';

for( $i = 0 ; $i < 3 ; $i++){
    echo "<br>";
   for($j = $i ; $j >= 0; $j--){
    echo "$Sign";
    $Sign++;
}
}




?>