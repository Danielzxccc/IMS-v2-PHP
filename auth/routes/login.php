<?php
session_start();
require_once '../../config.php';

header("Content-Type: application/json");

function hasResult($result){
    if(mysqli_num_rows($result) > 0){
        return true;
    }else{
        return false;
    }
}
function mysqli_value($con,$e){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST[$e])){
            return mysqli_escape_string($con,$_POST[$e]);
        }   
    }else{
        if(isset($_GET[$e])){
            return mysqli_escape_string($con,$_GET[$e]);
        }
    }
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = mysqli_value($con,"username");
    $password = mysqli_value($con,"password");

    function message($status,$message){
        $msg = array(
            "success" => $status,
            "message" => $message
        );
        echo json_encode($msg);
        die();
    }
    $password = md5($password);
    if($username == ""){
        message(false,"Please enter your username.");
    }
    if($password == ""){
        message(false,"Please enter your password.");
    }
    $check_user = mysqli_query($con,"SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' ");

    if($check_user) {
        if(hasResult($check_user)){
            $_SESSION["islogin"] = true;
            message(true,"Successful login.");
        }else{
            message(false,"Username or password is not valid, Please try again.");
        }
    }else{
        message(false,"Username not found");
    }
}
?>