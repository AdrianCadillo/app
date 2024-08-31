<?php 
session_start();

if(isset($_SESSION["user"])){
    session_destroy();
}else{
    setcookie("user","",time()-100);
}

header("location:../views/login.php");