<?php
session_start();
const AUMENTO_SISTEMAS = 0.20;
const AUMENTO_ADMINISTRADOR = 0.15;
const AUMENTO_CONTADOR = 0.14;
const AUMENTO_PROGRAMADOR = 0.16;

$Aumento = 0.00;
$NuevoSalario = 0.00;
if(isset($_POST["calcular"])){
    $Nombre = $_POST["nombre"];
    $Salario = $_POST["salario"];
    $Cargo = $_POST["cargo"];

    if($Cargo === "Ing.de sistemas"){
        $Aumento = AUMENTO_SISTEMAS*$Salario;
    }else{
        if($Cargo === "Contador"){
            $Aumento = AUMENTO_CONTADOR*$Salario;
        }else{
            if($Cargo === "Administrador"){
                $Aumento = AUMENTO_ADMINISTRADOR*$Salario; 
            }else{
                $Aumento = AUMENTO_PROGRAMADOR*$Salario; 
            }
        }
    }


    $NuevoSalario = $Salario +$Aumento;

    $_SESSION["response"] = "EL NUEVO SALARIO DEL EMPLEADO $Nombre ES : $NuevoSalario";
    header("location:../views/salario.php");

}