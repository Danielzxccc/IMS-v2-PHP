<?php
    session_start();
    if($_SESSION['islogin'] == false){
        header ("Location: ./auth/index.php");
    }else{
        header ("Location: ./dashboard/index.php");
    }
?>