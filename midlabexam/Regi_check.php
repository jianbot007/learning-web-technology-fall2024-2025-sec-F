<?php
    session_start();

    if(isset($_POST['submit'])){

        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
        $email  = trim($_REQUEST['email']);
        $bloodgroup  = trim($_REQUEST['blood']);
        
        
        if($username == null || empty($password) || empty($email) || empty($bloodgroup)){
            echo "Null data found!";
        }else {
           

          $_SESSION['Signupflag'] = true;
         $_SESSION['username'] = $username;
           $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
           $_SESSION['blood'] = $bloodgroup;
        

            header('location: login.html');
        }
    
    }else{
        header('location: Registration.php');
    }

?>