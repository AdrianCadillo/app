<?php
/**
 * ENTERO (int)
 */
 $numero = 12;

 //echo gettype($numero);

 /**
  * float (número decimales)
  */
  $numero2 = 12.56;

 // echo gettype($numero2);

  /**
   * string (cadenas de texto)
   */
  $frase = "frase";
  $Texto = 'descripción de una frase $frase';
  //echo gettype($Texto);

  /**
   * Boleanos => true false => Verdadero Falso
   */
   $condicion = true; $condicion1 = false;

   //echo gettype($condicion1);

   /**
    * Arrays
   */
   $paises = ["Perú","Bolivia","Venezuela",34];

//    print_r($paises)."<br>";
//    echo gettype($paises);

   class Clase{}

   $clase = new Clase;

   //echo gettype($clase);

   $Null = null;

   echo gettype($Null);


