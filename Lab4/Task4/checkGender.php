<?php
    session_start();

    if(isset($_POST['submit'])){

        $gender = $_REQUEST["gender"];
        $check = false;


  if ($gender != null){
    $check = true;
  }
    
        


        

if ($check == true ){
  echo "Valid Gender";

}else {
    echo "Invalid Gender";
}
        
    
}

?>