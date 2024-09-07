<?php

$saludar = function(){
 echo "SOY UNA FUNCION ANONIMA";
};

/**
 * Credenciales
 */
$Credenciales = [
    "username" => "login",
    "password" => password_hash("12345",PASSWORD_BCRYPT)
];


$login = function(string $usuario,string $password) use($Credenciales){
  if($usuario === $Credenciales["username"] and password_verify($password,$Credenciales["password"])){
    echo "BIENVENIDO AL SISTEMA!";
  }else{
    echo "ERROR EN LAS CREDENCIALES";
  }
};

$login("login","123456");

