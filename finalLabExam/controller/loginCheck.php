<?php
session_start();
include('../model/usermodel.php');

    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;
   
  

    if (empty($username) || empty($password)) {
        echo "Null data found!";
    }
     else {
       $status =  login($username,$password);
       $AdminStatus = Adminlogin($username,$password);
         
         if($AdminStatus){
            $_SESSION['adminname'] = $username;
            echo "Admin Login Succesful";
            exit();
         }
         else if($status){
            $_SESSION['username'] = $username;
            echo "User Login Succesful";
            exit();
         }
         else{
            echo "Error 404 .Try Again $username";
         }
} 


?>
