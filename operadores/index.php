<?php
/**
 * OPERADORES ARITMETICOS
 * suma
 * resta
 * multiplicacion
 * division
 * potencia
 * raiz
 */
$numero1 = 12;
$numero2 = 40;
$numero3 = 81;

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$producto = $numero1 * $numero2;
$division = $numero1 / $numero2;
$potencia = pow($numero1,3);
$Raiz = sqrt($numero3);
$RaizCubica = $numero3**(1/4);

// echo "LA SUMA ES :".$suma."<br>
//       LA RESTA ES : ".$resta."<br>
//       La RAIZ CUBICA DE $numero3 ES ".$RaizCubica;

/**
 * OPERADORES RELACIONALES
 * > 
 * <
 * >=
 * <=
 * ==
 * === 
 */

// echo 45>57 ? 'MAYOR EL 45':'EL MAYOR ES EL OTRO NUMERO';

$NUMERO_1 = 12;/// integer
$NUMERO_2 = "12";/// string

/// V y F = F
//echo $NUMERO_1 === $NUMERO_2;

/**
 * OPERADORES LOGICOS
 */

$numero_uno = 12;
$numero_dos = 45;

$respuesta = ($numero_uno > $numero_dos) || ($numero_dos > $numero_uno);

              ////  F                    or     V
              //    V

    echo $respuesta;





