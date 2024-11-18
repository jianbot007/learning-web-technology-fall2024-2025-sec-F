<?php
    session_start();

    if(isset($_POST['submit'])){

        $username  =  $_REQUEST['username'];
        $count = str_word_count($username);
        $alphabet1 = range('a', 'z');
        $alphabet2 = range('A', 'Z');

        $check = false;


        if($username != null && $count >= 2  ){

            foreach( $alphabet1 as $elements1  ) { 
            if($username[0] == $elements1 ){
                    $check = true;
                    
            }
            } 
           foreach( $alphabet2 as $elements2  ) { 
            if($username[0] == $elements2 ){
                        $check = true;
                        
                }
                } 

            }
        
      

    if($check == true){
        echo "Valid Check";
    }
    else { echo "Invalid Check";}
}



  
?>