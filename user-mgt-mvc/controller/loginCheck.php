<?php
session_start();
include('../model/usermodel.php');
if (isset($_REQUEST['submit'])) {
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);

    if (empty($username) || empty($password)) {
        echo "Null data found!";
    }
     else {
       $status =  login($username,$password);
         if($status){
            header('location: ../view/home.php');
         }
         else{
            echo "Error 404";
         }
} 
}
else {
    header('location: ../view/login.html');

}

?>
