<?php
namespace logica;
class Ejercicio
{
   /**MÉTODO PARA EL EJERCICIO 1 */
   
   public function ejercicio1(string $texto,int $inicio,int $final)
   {
      return  substr($texto,$inicio,$final);
   }
}