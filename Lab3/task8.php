<?php

$Array = [[1,2,3,A],[1,2,B,C],[1,D,E,F]];


for( $i = 0 ; $i < 3 ; $i++){
    echo "<br>";
   for($j = $i ; $j >= 0; $j--){
    echo "$Array[i][j]";
}
}


?>