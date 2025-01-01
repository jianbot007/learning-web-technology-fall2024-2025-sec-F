
<?php
 include('../model/usermodel.php');

if (isset($_REQUEST['id'])) {
    $ID_to_remove = $_REQUEST['id'];
       
    $status = deleteUser($ID_to_remove);
    if($status){
      header('location: ../view/userlist.php');
    }
    else {
      echo "$ID_to_remove cant remove ... ERROR";
    }
   
    }

    else{

    echo "Error: User not found or could not delete.";
}
?>
