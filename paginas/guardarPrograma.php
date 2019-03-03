<?php

if (!function_exists('dieProgram')) {
  require_once("../Funciones/funcionesGenerales.php");
}
dieProgram();

  $nombrePrograma = $_REQUEST['nombrePrograma']??"";

  if ($nombrePrograma != null || $nombrePrograma!="") {
    $programa = new Programa($nombrePrograma);
    $programa->addPrograma();

    $h = new H("4", "Programa: {$nombrePrograma} creado con éxito");

    $aProgramaCreado = new A("index.php", "Volver");

    $body->insertar($h);
    $body->insertar($aProgramaCreado);
  }else{
    $h = new H("4", "Error");

    $aRegistro = new A("index.php", "Volver");

    $body->insertar($h);
    $body->insertar($aRegistro);
  }


?>
