
<?php
 include('../model/usermodel.php');

if (isset($_REQUEST['id'])) {
    $ID_to_remove = $_REQUEST['id'];
       
    $status = deleteUser($ID_to_remove);
    if($status
    ){

        echo "DELETED";
    }
    else {
      echo "$ID_to_remove cant ... ERROR";
    }
    //header('location: ../view/userlist.php');
    }

    else{

    echo "Error: User not found or could not delete.";
}
?>
