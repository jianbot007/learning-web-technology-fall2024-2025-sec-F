<?php
function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'test');
        return $con;
    }


function Adminlogin($username, $password){
        $con = getConnection();
        $sql = "select * from adminlist where accountname='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count =  mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
    }
    ?>
