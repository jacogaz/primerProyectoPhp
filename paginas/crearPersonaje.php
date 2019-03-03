<?php

if (!function_exists('dieProgram')) {
  require_once("../Funciones/funcionesGenerales.php");
}
dieProgram();


  $program = new Programa();
  $consulta = $program->consultarPrograma('programa');

  $formConsultar = new Form ("formulario","index.php", "post");
  $p = new P("pInformativo", "pInformativo", "Crear personaje en... ");
  $selectProyectos = new Select("selectProyecto", "selectProyecto");

  foreach ($consulta as $dato) {

    $option = new Option($dato[1], $dato[0]);
    $selectProyectos->insertar($option);

  }

  $botonConsultar = new Input("submit", "crearDatosPersonaje", "consultarDatos", "Crear");
  $botonVolver = new Input("submit", "consultarDatosVolver", "consultarDatos", "Volver");

  $divConsultar= new Div("contenedorRegistro");


  $divConsultar->insertar($p);
  $divConsultar->insertar($selectProyectos);
  $divConsultar->insertar($botonConsultar);
  $divConsultar->insertar($botonVolver);

  $formConsultar->insertar($divConsultar);
  $body->insertar($formConsultar);

?>
