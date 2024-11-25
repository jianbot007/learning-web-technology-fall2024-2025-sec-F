<?php
    session_start();
    if(isset($_POST['submit'])){
        if (isset($_SESSION['myArray'])){
        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
         
         $setpassword = $_SESSION['password'];
         $setusername =$_SESSION['username'];
       
        if($username == null || empty($password) ){
            echo "Null data found!";
        }else if ($username == $setusername && $password == $setpassword){
       
            $_SESSION['loginflag'] = true;
            header('location: home.php');
        }else{
            echo "Invalid user";
        }
        }
         else{

                }
    }else{
      
        header('location: login.html');
    }
 
?>