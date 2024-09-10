<?php

//$funcionFlecha = fn() => 'Soy una función flecha';

$Apellidos = "Romero Armas";

$funcionFlechaDos = fn(string $nombre) => 'Hola '.$nombre." ".$Apellidos;

//echo $funcionFlecha();

//echo $funcionFlechaDos("Paola");


/**
 * Funciones flecha anidadas
 */

 $Login = fn(string $usuario) => fn(string $password):bool=> $usuario === 'admin' and $password=== '123';

 echo $Login("admin")("1233") ? 'LOGIN EXITOSO' : 'ERROR CREDENCIALES';
