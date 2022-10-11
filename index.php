<?php
    session_start();
    if(!isset($_SESSION['islogin'])){
        header ("Location: ./auth/index.php");
    }else{
        header ("Location: ./dashboard/index.php");
    }
?>