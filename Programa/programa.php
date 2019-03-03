<?php

/*require_once("accdata/BaseDatos.php");
require_once("accdata/bdconf.php");*/

class Programa{
  private $nombre;

  function __construct($nom=""){
    $this->nombre = $nom;
  }

  function addPrograma(){

    $arrayDatosPrograma = array(
      "nombre"=>array("s", $this->nombre)
    );

    $bbdd = new BaseDatos(HOST, US, PASS ,BBDD, PUERTO);
    $consulta = $bbdd->crearConsulta('programa', $arrayDatosPrograma);
    $bbdd->insertarConsulta($arrayDatosPrograma, $consulta);

    $bbdd = null;
  }


  function consultarPrograma($table){

    $bbdd = new BaseDatos(HOST, US, PASS ,BBDD, PUERTO);
    $consulta = $bbdd->consultar($table);
    $bbdd = null;

    return $consulta;

  }

  function consultarDatosPrograma($table, $cod){

    $bbdd = new BaseDatos(HOST, US, PASS ,BBDD, PUERTO);

    $consulta = $bbdd->consultarDatos($table, $cod);

    $bbdd = null;

    return $consulta;

  }

  function consultarPersonajes($table, $cod){

    $bbdd = new BaseDatos(HOST, US, PASS ,BBDD, PUERTO);

    $consulta = $bbdd->consultarPersonaje($table, $cod);

    $bbdd = null;

    return $consulta;

  }

  function consultarDatosPersonajes($table, $cod){

    $bbdd = new BaseDatos(HOST, US, PASS ,BBDD, PUERTO);

    $consulta = $bbdd->consultarDatosPersonaje($table, $cod);

    $bbdd = null;

    return $consulta;

  }


}

 ?>
