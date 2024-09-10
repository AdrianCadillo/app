<?php

// $Persona = new class('Perez Mendoza','Pedro Guillermo'){
  
//     /**
//      * Atributos, propiedades o caracteristicas
//      */
//     public string $Apellidos;
//     public string $Nombres;

//     /**
//      * Constructor
//      */
//     public function __construct(string $apellidos,string $nombres)
//     {
//        $this->Apellidos = $apellidos;
//        $this->Nombres = $nombres;
//     }

//      /**
//       * Acciones o métodos
//       */
//     function getPrintPersona():string{

//         return $this->Apellidos." ".$this->Nombres;
//     }

    
// };

// $persona = new $Persona('Armas Villanueva','Susana Andrea');

// echo $persona->getPrintPersona();


class Suma{
    public $Datos;

    public function setDatos($datos){
        $this->Datos = $datos;
    }

    public function getDatos(){
        return $this->Datos;
    }
}

$suma = new Suma;

$suma->setDatos(new class(6,8){
  /**
   * Atributos
   */
  public int $Numero1;
  public int $Numero2;

  /**Constructor */

  public function __construct(int $num1,int $num2)
  {
    $this->Numero1 = $num1;

    $this->Numero2 = $num2;
  }

  /**Acciones o los métodos */

  public function getSuma():string {
    return "LA SUMA ES : ".$this->Numero1 + $this->Numero2;
  }
});

echo $suma->getDatos()->getSuma();



