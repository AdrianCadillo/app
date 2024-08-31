<?php
session_start();
$user_credencial = "login";
$password_credencial = password_hash("123456789",PASSWORD_BCRYPT);

if(isset($_POST["login"])){
 
  $Username = $_POST["username"];
  $Password = $_POST["password"];  

  $Remember = isset($_POST["remember"]) ? true:false;

  if($Username === $user_credencial && password_verify($Password,$password_credencial)){
    if($Remember){
       setcookie("user",openssl_encrypt($Username,"aes-128-cbc","cursophp"),time()+40,"/"); 
    }else{
        $_SESSION["user"] = $Username;
    }

    header("location:../views/dashboard.php");
  }else{
    echo "error";
  }
}