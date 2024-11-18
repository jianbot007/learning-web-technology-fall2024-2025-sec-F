<?php
    session_start();

    if(isset($_POST['submit'])){

        $email  =  $_REQUEST['email'];
        $check = false;


        if($email != null){
        $check = true;
        }
        
    if($check == true){
        echo "Email Valid Check";
    }
    else { echo " Email Invalid Check";}
}



    //print_r($_GET);
    //echo "Test";
?>