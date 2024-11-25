<?php
if(isset($_REQUEST['submit'])){

    $value=$_REQUEST['blood'];

    if($value!=null){
        echo " Valid: Your blood group $value Stored succesfully";

    }
    else{
        echo "INVALID : Select your group";
    }




}


?>