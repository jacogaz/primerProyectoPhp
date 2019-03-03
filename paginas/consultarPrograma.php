<?php

if (!function_exists('dieProgram')) {
  require_once("../Funciones/funcionesGenerales.php");
}
dieProgram();


  $program = new Programa();
  $consulta = $program->consultarPrograma('programa');

  if ($consulta) {
    $formConsultar = new Form ("formulario","index.php", "post");
    $p = new P("pInformativo", "pInformativo", "Proyectos disponibles: ");
    $selectProyectos = new Select("selectProyecto", "selectProyecto");

    foreach ($consulta as $dato) {

      $option = new Option($dato[1], $dato[0]);
      $selectProyectos->insertar($option);

    }


    $botonConsultar = new Input("submit", "consultarDatos", "consultarDatos", "Consultar");
    $botonVolver = new Input("submit", "consultarDatosVolver", "consultarDatos", "Volver");

    $divConsultar= new Div("contenedorRegistro");


    $divConsultar->insertar($p);
    $divConsultar->insertar($selectProyectos);
    $divConsultar->insertar($botonConsultar);
    $divConsultar->insertar($botonVolver);

    $formConsultar->insertar($divConsultar);
    $body->insertar($formConsultar);
  }else{
    $h = new H("4", "No existe programa para consultar, cree uno antes.");

    $aRegistro = new A("index.php", "Volver");

    $body->insertar($h);
    $body->insertar($aRegistro);
  }



 ?>
