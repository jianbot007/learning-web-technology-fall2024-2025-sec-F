<?php
    session_start();

    if(isset($_POST['submit'])){

        $day  =  $_REQUEST['day'];
        $month = $_REQUEST['month'];
        $year = $_REQUEST['year'];
        $check = false;
    
        if($day != null && $month != null && $year != null){
             if((($day > 0) && ($day < 32)) && ((0 < $month)  && ($month < 13)) && ((1952 < $year)  && ($year < 1999))){
                      $check = true;
             }


        }

if ($check == true ){
  echo "Valid Date of Birth";

}else {
    echo "Invalid Date of Birth";
}
        
    
}

?>