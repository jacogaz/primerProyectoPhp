<?php

if (!function_exists('dieProgram')) {
  require_once("../Funciones/funcionesGenerales.php");
}
dieProgram();


$codPersonaje = $_REQUEST['codPerson']??"";
$codForanea = $_REQUEST['codForanea']??"";
$nombre = $_REQUEST['nombreActor']??"";
$nombrePersonaje = $_REQUEST['nombrePersonaje']??"";
$infoAdi = $_REQUEST['infoAdi']??"";
$descriVestu = $_REQUEST['descriVestu']??"";



if ($nombre && $nombrePersonaje && $codForanea && $infoAdi && $descriVestu && $codPersonaje) {
  $personaje = new Personaje($nombre, $nombrePersonaje, $codForanea,$infoAdi, $descriVestu, $codPersonaje);
  $personaje->editarPersonaje();
  $h = new H("4", "Personaje {$nombrePersonaje} editado con éxito");

  $aRegistro = new A("index.php", "Volver");

  $body->insertar($h);
  $body->insertar($aRegistro);
}else{
  $h = new H("4", "Error");

  $aRegistro = new A("index.php", "Volver");

  $body->insertar($h);
  $body->insertar($aRegistro);
}



?>
