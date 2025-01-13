<?php

    include('../model/usermodel.php');
    
    if(isset($_POST['submit'])){
        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
        $email  =  trim($_REQUEST['email']);
        $phone = trim($_REQUEST['phoneno']);
        

        if($username == null || empty($password) || empty($email) ){
            echo "Null data found!";
        }else {
            $status = addUser($username, $password, $email , $phone);
            if($status){
                header('location: ../view/userlist.php');
            }else{
                header('location: ../view/userlist.php');
            }
        }
    }else{
        header('location: ../view/signup.html');
    }

?>