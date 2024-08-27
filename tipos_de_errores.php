<?php 

/**
 * Errores de tipo warning
 */
// $Error_Warning = "Esto es un mensaje de error warning";

// echo $Error_Warnings;

// print_r([1,2,3,4,5,"string"]);

/**
 * Errores de tipo fatal
 */
ini_set("display_errors",0);
ini_set("log_errors",1);
ini_set("error_log","C:/xampp3/htdocs/app/errores/error_log.log");
class ClaseName
{
    public function __construct()
    {
        echo "Hola soy error fatal";
    }
}
$errorFatal = new ClasePhp();
echo "Ya no continua la ejecución del código";