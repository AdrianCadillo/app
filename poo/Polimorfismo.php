<?php 

abstract class Polimorfismo
{
  /**
   * Definir métodos
   */
  abstract public function Insert();
  
  abstract public function Update();

  abstract public function saludar();

}


class Hija_Uno extends Polimorfismo{
     public function Insert(){}
  
     public function Update(){}

     public function saludar(){
        echo "VENGO DE LA CLASE HIJA 1<br>";
     }
}

class Hija_Dos  extends Polimorfismo{
     public function Insert(){}
  
     public function Update(){}

     public function saludar(){
        echo "VENGO DE LA CLASE HIJA 2<br>";
     }
}

class Hija_Tres extends Polimorfismo
{
     public function Insert(){}
  
     public function Update(){}

     public function saludar(){
        echo "VENGO DE LA CLASE HIJA 3";
     }
}


$polimorfirmo = [
    new Hija_Uno,
    new Hija_Dos,
    new Hija_Tres
];

foreach($polimorfirmo as $poli)
{
    $poli->saludar();
}