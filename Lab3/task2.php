<?php




function VatCalculation($vat_Percenatge,$amount){
    $Vat = $amount * ($vat_Percenatge/100);
    echo "The amount of total vat is {$Vat}<br>";
}

VatCalculation(15,1000);


?>