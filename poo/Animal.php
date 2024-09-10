<?php 

/// PLANTILLA
class Animal {
  /**
   *Caracteristicas, propiedades o atributos
   * */  
  public string $Nombre;
  public string $Color;
  public string $Raza;
  public int $Edad;

 /**COSNTRUCTOR */
  public function __construct(string $nombre,string $color,string $raza,int $edad)
  {
    $this->Nombre = $nombre; $this->Color = $color;
    $this->Raza = $raza; $this->Edad = $edad;
  }
 /**
  * Acciones o métodos
  */

  public function getPrintDatos():void{
    echo "NOMBRE: ".$this->Nombre."<br>COLOR: ".$this->Color."<br>
          RAZA: ".$this->Raza."<br>EDAD: ".$this->Edad."<br><br>";
  }
}

$Gato = new Animal("Paco","Negro","Angora",5);
 

//echo $Gato->Nombre." - ".$Gato->Color."<br>";

$Gato->getPrintDatos();

$Perro = new Animal("BOBY","Blanco","RAZA",4);
 

// echo $Perro->Nombre." - ".$Perro->Color;
$Perro->getPrintDatos();
