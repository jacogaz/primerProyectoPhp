<?php

/*require_once("accdata/BaseDatos.php");
require_once("accdata/bdconf.php");*/

class Personaje{
  private $nombreActor;
  private $nombrePersonaje;
  private $codForanea;
  private $codPerson;
  private $infoAdicional;
  private $descripcionVestu;

  function __construct($nom="", $per="", $codF="", $infoA="", $descriVestu="", $codPer=false){
    $this->nombreActor = $nom;
    $this->nombrePersonaje = $per;
    $this->codForanea = $codF;
    $this->codPerson = $codPer;
    $this->infoAdicional = $infoA;
    $this->descripcionVestu = $descriVestu;
  }

  function editarPersonaje(){

    if($this->codPerson){

      $arrayDatosRegistro =  array(
        "codSerie"=>array("i",$this->codForanea),
        "nombreActor"=>array("s",$this->nombreActor),
        "nombrePersonaje"=>array("s",$this->nombrePersonaje),
        "infoAdicional"=>array("s",$this->infoAdicional),
        "descripcionVestuario"=>array("s",$this->descripcionVestu)
      );

      $bbdd = new BaseDatos(HOST, US, PASS ,BBDD, PUERTO);
      $consulta = $bbdd->crearConsultaActualizar('Personajes', $arrayDatosRegistro,$this->codPerson);
      $bbdd->insertarConsulta($arrayDatosRegistro, $consulta);

      $bbdd = null;

    }

  }

  function insertarPersonaje(){

    $arrayDatosRegistro =  array(
      "codSerie"=>array("i",$this->codForanea),
      "nombreActor"=>array("s",$this->nombreActor),
      "nombrePersonaje"=>array("s",$this->nombrePersonaje),
      "infoAdicional"=>array("s",$this->infoAdicional),
      "descripcionVestuario"=>array("s",$this->descripcionVestu)
    );

    $bbdd = new BaseDatos('localhost', 'root', '' ,'raccord', '8889');
    $consulta = $bbdd->crearConsulta('Personajes', $arrayDatosRegistro);
    $bbdd->insertarConsulta($arrayDatosRegistro, $consulta);

    $bbdd = null;
  }
}



 ?>
