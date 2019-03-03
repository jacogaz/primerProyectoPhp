<?php

if (!function_exists('dieProgram')) {
  require_once("../Funciones/funcionesGenerales.php");
}
dieProgram();


  $personaje = $_REQUEST['selectProyectoEditar']??"";

  if ($personaje) {
    $program = new Programa();
    $consulta = $program->consultarPersonajes('Personajes', $personaje);

    $formConsultar = new Form ("formulario","index.php", "post");
    $p = new P("pInformativo", "pInformativo", "Personajes para editar: ");
    $selectProyectos = new Select("selectPersonaje", "selectPersonajeEditar");

    foreach ($consulta as $dato) {

      $option = new Option($dato[1], $dato[0]);
      $selectProyectos->insertar($option);

    }

    $botonConsultar = new Input("submit", "editarDatosPersonaje", "consultarDatos", "Editar");

    $divConsultar= new Div("contenedorRegistro");
    $botonVolver = new Input("submit", "volver", "consultarDatos", "Volver");

    $divConsultar->insertar($p);
    $divConsultar->insertar($selectProyectos);
    $divConsultar->insertar($botonConsultar);
    $divConsultar->insertar($botonVolver);



    $formConsultar->insertar($divConsultar);
    $body->insertar($formConsultar);
  }else{
    $h = new H("4", "Error");

    $aRegistro = new A("index.php", "Volver");

    $body->insertar($h);
    $body->insertar($aRegistro);
  }




 ?>
