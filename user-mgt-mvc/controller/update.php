<?php
session_start();
include('../model/usermodel.php');


if (isset($_REQUEST['submit'])) {
   

    $id_to_edit = $_SESSION['idedit'];
    $newname = $_REQUEST['username'];
    $newpass = $_REQUEST['password'];
    $newemail = $_REQUEST['email'];

    
   $update = updateUser($id_to_edit,$newname,$newemail,$newpass);
   if ($update != null){
           header('Location: ../view/userlist.php'); 
        }
        else{
           echo "$id_to_edit not update";
        }
    }
else {
    echo "Error: User not found or could not delete.";
}

?>
