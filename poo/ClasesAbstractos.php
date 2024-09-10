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
    public function Attemp(array $credencials):bool{

    }
}