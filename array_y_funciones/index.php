<?php 
/**
 * Primera forma
 */
//$Paises = array("Perú","Bolivia","Brasil");

/**Segunda forma */
$Personas = [];

$Personas[] = "Luisa";
$Personas[] = "Pedro";
$Personas[] = 12;


 echo "<pre>";
 print_r($Personas);
 echo "</pre>";

 //echo $Personas[2];

//  for($i = 0;$i<count($Personas);$i++){
//     echo $Personas[$i]."<br>";
//  }

// foreach($Personas as $persona):
//   echo  $persona."<br>";
// endforeach;

// foreach($Personas as $index=>$persona):
//     echo  $index." - ".$persona."<br>";
// endforeach;
//var_dump($Personas);

$Estudiantes = [
    "name" => "Fiorella",
    "lastname" => "Armas Villanueva",
    "phone" => "980765122"
];


// foreach($Estudiantes as $estudiante)
// {
//     echo $estudiante."<br>";
// }

// $Docentes = [
//     "nombres" => "Pedro Alberto",
//     "apellidos" => "Armas Santos",
//     "profesion" => ["Ing.de sistemas","Ing.civil","Administración"]
// ];

// echo $Docentes["profesion"][2];



$Users = [
    [
     "name" => "usuario1",
     "email" => "usuario1@gmail.com",
     "password"=>"12345"   
    ],
    [
     "name" => "usuario2",
     "email" => "usuario2@gmail.com",
     "password"=>"123456" 
    ],
    [
     "name" => "usuario3",
     "email" => "usuario3@gmail.com",
     "password"=>"1234567" 
    ]
];

//echo "LA CANTIDAD DE USUARIOS REGISTRADOS SON : ".sizeof($Users);

// foreach($Users as $user)
// {
//     echo $user["name"]." - ".$user["email"]." - ".$user["password"]."<br>";
// }

// $Personal = [
//     "Eduardo",
//     "María",
//     "Rolando",
//     "Adrian"
// ];

// if(is_array($Personal))
// {
//    if(in_array("Adrian",$Personal)){
//      echo "si existe";
//    }else{
//     echo "no existe";
//    }
// }else{
//     echo "NO ES UN ARRAY";
// }


// $route = "user/create";

// $route = explode("/",$route);

// echo "<pre>";
// print_r($route);
// echo "</pre>";

/**
 * Implode
 */
 $Frutas = ["Mango","Mandarina","Piña","Manzana"];

// $Frutas = implode("-",$Frutas);

// echo $Frutas;

/**
 * Añadir nuevos elementos
 */
// print_r($Frutas);

// array_push($Frutas,"Pera");
// echo"<br>";
// print_r($Frutas);
// /**
//  * Eliminar elementos
//  */
// array_pop($Frutas);

// echo"<br>";
// print_r($Frutas);


$Paises = [
    "name" => "Peru",
    "habitantes" => "33,00000"
];

// $KeyPaises = array_keys($Paises);
// $KeyPaises = array_key_first($Paises);

// print_r($KeyPaises);

/**
 * Array_diff
 */
$A = [1,2,3,4,5,6];

$B = [2,4];
// A-B

//print_r(array_diff($A,$B));

// $route = ["producto","delete"];

// list($controlador,$methodo) = $route;

// echo $controlador." / ".$methodo;

/**
 * Extract y compact
 */

//  $route = ["controlador" => "permissionControler","methodo"=>"create","parametro"=>12];

//  extract($route);

//  echo $controlador."  ".$methodo."  ".$parametro;

// $controller = "userController";
// $Methodo = "editar";
// $Parametro = 2;

// $Datos = compact("controller","Methodo","Parametro");

// print_r($Datos["controller"]);



// $Numeros = ["",-1,2,4,5,6,23,45,120];

// // $NumerosMayores10 = array_filter($Numeros,function($numero){
// //   return $numero>10;
// // });
// $NumerosMayores10 = array_filter($Numeros);
// print_r($NumerosMayores10);


// $Nombres = ["maria","pedro","irma","juliana"];

// $MayusculasNombresPrimeraLetra = array_map("ucwords",$Nombres);

// echo "<pre>";
//  print_r($MayusculasNombresPrimeraLetra);
// echo "</pre>";

$Numeros_ = [2,3,4,11,13,89,45,17,19];

$Primos = array_map(function($numero_){
      $contador = 0;
      for($j=1;$j<=$numero_;$j++){//[1,2] [1,2,3]
        if(fmod($numero_,$j) == 0){
            $contador++;
        }
      }

      if($contador == 2){
        return $numero_;
      }
},$Numeros_);


echo "LOS NUMEROS PRIMOS SON :<br>";

print_r($Primos);





 






