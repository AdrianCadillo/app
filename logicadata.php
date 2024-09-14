<?php 

$Texto = "Hola Adrian que haces"; /// Hola_Adrian

$caracteresLong = strlen($Texto);
 
for($i=0;$i < $caracteresLong;$i++)
{
    if(substr($Texto,$i,1) === ' '){
        $Texto[$i] = "_";
    }
}

//echo $Texto;


$Persona = "Rosales Cadillo Adrian Jose"; /// R C A

$Codigo = $Persona[0]." ";
$LongCaracteresPersona = strlen($Persona);
for($i=0;$i < $LongCaracteresPersona;$i++)
{
    if(substr($Persona,$i,1) === ' '){
         $Codigo.= $Persona[$i+1]." ";
    }
}

echo $Codigo;



