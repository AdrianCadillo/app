<?php 

/**
 * SUPER CLASE OH LA CLASE PADRE
 */
class Persona {
  public string $Dni;
  public string $Apellidos;
  public string $Nombres;
  public string $Direccion;
  public int $Edad;
  private string $Correo;
  private string $Telefono;

  /**CONSTRUCTOR */
  public function __construct(string $dni,string $apellidos,string $nombres,
                              string $direccion,int $edad)
  {
    $this->Dni = $dni; $this->Apellidos = $apellidos;
    $this->Nombres = $nombres; $this->Direccion = $direccion;
    $this->Edad = $edad;
  }

  /**
   * Métodos Accesores SEETER Y GETTERS
   */

  public function setCorreo(string $correo):void{
     $this->Correo = $correo;
  }

  public function setTelefono(string $telefono):void{
    $this->Telefono = $telefono;
  }

  public function getCorreo():string{
    return $this->Correo;
  }

  public function getTelefono():string{
    return $this->Telefono;
  }

  /**
   * Metodo
   */

   public function getDatos():string{
    return "DNI: ".$this->Dni."<br>PERSONA: ".$this->Apellidos." ".$this->Nombres."<br>DIRECCION:".
    $this->Direccion."<br>EDAD: ".$this->Edad."<br>";
   }
}

/**CLASE HIJA */
class Estudiante extends Persona{
  public string $CodigoEstudiante;
  public string $CarreraProfesional;

  /**CONSTRUCTOR */
  public function __construct(string $dni,string $apellidos,string $nombres,
  string $direccion,int $edad,string $codigo,string $carrera)
  {
    parent::__construct($dni,$apellidos,$nombres,$direccion,$edad); 
    $this->CodigoEstudiante = $codigo;
    $this->CarreraProfesional = $carrera;
  }

  /**
   * Método
   */
  public function getEstudianteData():string{
   return $this->getDatos()."CODIGO ESTUDIANTE: ".$this->CodigoEstudiante."<br>
   CARRERA PROFESIONAL: ".$this->CarreraProfesional;
  }
}

$estudiante = new Estudiante(
    "123487912",
    "Armas Santillan",
    "Pablo Luis",
    "Lima",
    30,
    "EST-09383",
    "Ing.Civil"
);

$estudiante->setCorreo("Pablo@gmail.com");
$estudiante->setTelefono("980765234");



echo $estudiante->getEstudianteData()."<br>CORREO: ".$estudiante->getCorreo()."<br>
TELEFONO: ".$estudiante->getTelefono();