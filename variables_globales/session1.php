<?php 
session_start();

echo array_key_exists("username",$_SESSION)? $_SESSION["username"]:'la variable no esta definida';

echo "<br>";

echo isset($_SESSION["lastname"]) ? $_SESSION["lastname"] :'no existe apellidos';
echo "<br>";
echo isset($_SESSION["direccion"]) ? $_SESSION["direccion"] :'no existe direccion';