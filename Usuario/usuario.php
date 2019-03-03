<?php
/*require_once("accdata/BaseDatos.php");
require_once("accdata/bdconf.php");*/

class Usuario{
  private $nombre;
  private $apellidos;
  private $usuario;
  private $pass;
  private $puesto;

  function __construct($nom, $ape, $us, $pass, $pues){
    $this->nombre = $nom;
    $this->apellidos = $ape;
    $this->usuario = $us;
    $this->pass = $pass;
    $this->puesto = $pues;
  }

  function addUsuario(){

    $arrayDatosRegistro =  array(
      "nombre"=>array("s",$this->nombre),
      "apellidos"=>array("s",$this->apellidos),
      "nombre_usuario"=>array("s",$this->usuario),
      "pass"=>array("s",$this->pass),
      "puesto"=>array("s",$this->puesto)
    );

    $bbdd = new BaseDatos(HOST, US, PASS ,BBDD, PUERTO);
    $consulta = $bbdd->crearConsulta('usuarios', $arrayDatosRegistro);
    $bbdd->insertarConsulta($arrayDatosRegistro, $consulta);

    $bbdd = null;
  }
}


 ?>
