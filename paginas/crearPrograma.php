<?php

  if (!function_exists('dieProgram')) {
    require_once("../Funciones/funcionesGenerales.php");
  }
  dieProgram();

  $formCrearPrograma = new Form("formulario", "index.php", "post");
  $divCrearPrograma = new Div("contenedorCrearPrograma");

  $inputNombre = new Input("text", "nombrePrograma","nombrePrograma", "", "Nombre: ");
  $botonGuardarPrograma = new Input("submit", "guardarPrograma", "guardarPrograma", "Guardar");
  $botonVolver = new Input("submit", "volverCrearPrograma", "volverCrearPrograma", "Volver");

  $divCrearPrograma->insertar($inputNombre);
  $divCrearPrograma->insertar($botonGuardarPrograma);
  $divCrearPrograma->insertar($botonVolver);

  $formCrearPrograma->insertar($divCrearPrograma);

  $body->insertar($formCrearPrograma);

 ?>
