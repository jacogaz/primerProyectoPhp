<?php

  if (!function_exists('dieProgram')) {
    require_once("../Funciones/funcionesGenerales.php");
    die("No puede acceder a esta pagina");
  }

  $tabla = new Table();
  $tr = new Tr();
  $inputUsuario = new Input("text", "inputUsuario","inputUsuario", "" , "Usuario");
  $tdInputUsuario = new Td($inputUsuario);
  $tr->insertar($tdInputUsuario);
  $tr1 = new Tr();
  $inputPass = new Input("password", "inputPass", "inputPass", "", "Contraseña");
  $tdInputPass = new Td($inputPass);
  $tr1->insertar($tdInputPass);
  $tr2 = new Tr();
  $botonInicioSesion = new Input("submit",  "inicioSesion", "inicioSesion", "Iniciar Sesion");
  $tdInicioSesion = new Td($botonInicioSesion);
  $tr2->insertar($tdInicioSesion);

  $tr3 = new Tr();
  $botonRegistro = new Input("submit", "registro" , "registro", "Registrarse");
  $tdRegistro = new Td($botonRegistro);
  $tr3->insertar($tdRegistro);

  $tabla->insertar($tr);
  $tabla->insertar($tr1);
  $tabla->insertar($tr2);
  $tabla->insertar($tr3);

  $div = new Div("contenedor");
  $div->insertar($tabla);
  $form->insertar($div);

 ?>
