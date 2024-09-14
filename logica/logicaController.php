<?php

use logica\Ejercicio;
session_start();
require 'Ejercicio.php';
if(isset($_GET["accion"]))
{
    $logica = new Ejercicio;
    $Errores = [];
    switch($_GET["accion"]):
     case "zodiacal":
         if(empty($_POST["fecha_nac"])){
            $_SESSION["error"] = "Ingrese su fecha de nacimiento!";
         }else{
            $FechaNacimiento = $_POST["fecha_nac"];

            /**
             * Obtener la cantidad de segundos 1970 actualidad
             */
            $CantidadSegundos = strtotime($FechaNacimiento);

            $Mes = date("m",$CantidadSegundos);/// numero
            $Dia = date("d",$CantidadSegundos);
            $SignoPersona = "";
            switch($Mes){
                /// enero
                case 1:$SignoPersona = $Dia<=20 ? "CAPRICORNIO":"ACUARIO";break;
                /// febrero
                case 2:$SignoPersona = $Dia <= 19 ? "ACUARIO": "PISCIS";break;
                /// marzo
                case 3:$SignoPersona = $Dia <= 20 ? "PISCIS": "ARIES";break;

                ///ABRIL
                case 4:$SignoPersona = $Dia <= 20 ? "ARIES": "TAURO";break;

                /// MAYO
                case 5:$SignoPersona = $Dia <= 20 ? "TAURO": "GEMINIS";break;

                ///JUNIO
                case 6:$SignoPersona = $Dia <= 21 ? "GEMINIS": "CANCER";break;

                default:
                $SignoPersona = "CONTINUAR LOS 6 MESES SIGUIENTES...";
                break; 
            }

            $_SESSION["success"] = $SignoPersona;

         }

          
          header("location:../views/zodiacal.php");
     break; 

     case "ejercicio1":
        if(empty($_POST["numero"])){
            $_SESSION["error"] = "Ingrese un número!";
        }else{
            $Numero = $_POST["numero"];
            /**
             * 7 => 1,2,3,4,5,6,7
             * 
             */
            $i = 1;$contador = 0;$response = "";

            while($i <= $Numero):/// 1,2,3,4...7
                  if(fmod($Numero,$i) == 0){
                    $contador++;
                  }
                $i++;
            endwhile;

            if($contador == 2):
                 $response = "EL NUMERO $Numero ES PRIMO";
            else:
                $response = "EL NUMERO $Numero NO ES PRIMO";
            endif;

            $_SESSION["success"] = $response;
        }

        header("location:../views/ejercicio1.php");
     break;  
     
     case "ejercicio2":
        if(empty($_POST["fecha"])){
            $_SESSION["error"] = "Ingrese su fecha de nacimiento!";
         }else{
            $FechaNacimiento = $_POST["fecha"];

            /**
             * Obtener la cantidad de segundos 1970 actualidad
             */
            $CantidadSegundos = strtotime($FechaNacimiento);

            $Anio = date("Y",$CantidadSegundos);
            $Mes = date("m",$CantidadSegundos);/// numero
            $Dia = date("d",$CantidadSegundos);

            $NumeroSuerte = $Anio + $Mes + $Dia; /// [1-9] 
            $resto = 0;
            do{
             $resto = fmod($NumeroSuerte,10);
             $NumeroSuerte = floor($NumeroSuerte/10);
             $NumeroSuerte+=$resto;
            }while($NumeroSuerte > 9);


            $_SESSION["success"] = "EL NUMERO DE LA SUERTE DE LA FECHA: $FechaNacimiento ES: ".$NumeroSuerte;
         }
         header("location:../views/ejercicio2.php");
     break;
     
     case "ejercicio3":
        if(empty($_POST["numero_inicio"])){
            $_SESSION["error"] = "Ingrese el número de inicio!";
        }else{
            if(empty($_POST["numero_final"])){
                $_SESSION["error"] = "Ingrese el número final!";
            }else{
                $NumeroInicial = $_POST["numero_inicio"]; // 2
                $NumeroFinal = $_POST["numero_final"]; // 20
                $Primos = "";
                for($i=$NumeroInicial;$i <= $NumeroFinal;$i++){ /// 2,3,4,5,6,7.....20
                    $contador = 0; /// (1,2) ,(1,2,3),(1,2,3,4)
                    for($j = 1;$j <= $i;$j++){
                        if(fmod($i,$j) == 0)
                        {
                            $contador++;
                        }
                    }

                    if($contador == 2){
                        $Primos.=$i." - "; /// 2- 3 - 5 - 7 -
                    }
                }

                $Primos = rtrim($Primos," - ");
                $_SESSION["success"] = "LOS NUMERO PRIMOS DEL RANGO [$NumeroInicial - $NumeroFinal] ES : ".$Primos;
            } 
        }
        header("location:../views/ejercicio3.php");
     break;  
     
     case "subcadena_ejer1":
       EjercicioSubCadena(
        $_POST["texto"],
        $_POST["inicio"],
        $_POST["final"],
        $Errores,
        $logica
       );
     break;   
    endswitch;    
}




/**
 * Funciones
 */

function EjercicioSubCadena(string $texto,$inicio,$final,$Errores = [],$objeto)
{
    if(empty($texto))
    {
       $Errores [] = "Ingrese un texto!";
    }

    if(empty($inicio))
    {
       $Errores [] = "Ingrese la inicial!";
    }

    if(empty($final))
    {
       $Errores [] = "Ingrese la final!";
    }


    if(count($Errores) > 0){
        $_SESSION["errores"] = $Errores;
    }else{
     $response = $objeto->ejercicio1($texto,$inicio,$final);

     $_SESSION["success"] = $response;
    }

    header("location:../views/ejerciciosubcadena.php");
}