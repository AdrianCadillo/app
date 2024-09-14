<?php

/**CLASE PRINCIPAL => SUPER CLASE O CLASE PADRE */
abstract class ClasesAbstractos{
 abstract public function Attemp(array $credencials):bool;


 public function registrarUser(){
    
 }
}

/**
 * CLASE SECUNDARIA => CLASE HIJA
 */
class Implementacion extends ClasesAbstractos
{
    private array $credenciales;
    public function __construct()
    {
        $this->credenciales = [
            "login" => "admin",
            "password" => "123456789"
        ];
    }
    public function Attemp(array $credencials):bool{
      return $credencials["login"] === $this->credenciales["login"]
             and $credencials["password"] === $this->credenciales["password"];
    }
}


$implementacion = new Implementacion;

if($implementacion->Attemp(["login" => "admin1","password" => "123456789"]))
{
    echo "BIENVENIDO AL SISTEMA!";
}else{
    echo "ERROR CREDENCIALES";
}