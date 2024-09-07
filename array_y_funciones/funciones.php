<?php
Saludar("Andres");
Saludar("Julia");
Saludar("Pedro");
Saludar("Pepe");
Saludar("Maria");
Saludar();

if(Mensaje(true)){
    echo "instrucciones verdaderos";
}else{
    echo "instrucciones falsos";
}



function Saludar(string $Nombre = 'Xiomara'):void{
    echo "Hola, Mundo $Nombre"."<br>";
}

function Mensaje(bool $mensaje):bool|string|int{
    return $mensaje;
}