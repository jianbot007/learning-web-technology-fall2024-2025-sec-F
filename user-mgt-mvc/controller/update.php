<?php
session_start();

if (isset($_REQUEST['submit'])) {
   

    $id_to_edit = $_SESSION['idedit'];
    $newname = $_REQUEST['username'];
    $newpass = $_REQUEST['password'];
    $newemail = $_REQUEST['email'];

    
    foreach ($_SESSION['users'] as &$user) {
        if ($user['id'] == $id_to_edit) {
           

            $user['username'] =  $newname;
            $user['password'] = $newpass;
            $user['email'] = $newemail;            
            
          
           header('Location: ../view/userlist.php'); 
            exit(); 
        }
    }
          
    unset($user); 
}
else {
    echo "Error: User not found or could not delete.";
}

?>
