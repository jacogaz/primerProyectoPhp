<?php

  if (!function_exists('dieProgram')) {
    require_once("../Funciones/funcionesGenerales.php");
    die("No puede acceder a esta pagina");
  }

  $nombre = $_REQUEST['nombre']??"";
  $apellidos = $_REQUEST['apellidos']??"";
  $usuario = $_REQUEST['usuario']??"";
  $pass = $_REQUEST['pass']??"";
  $claveCifrada = password_hash($pass, PASSWORD_DEFAULT, array("cost=>15"));
  $puesto = $_REQUEST['puesto']??"";


  if ($nombre && $apellidos && $usuario && $pass && $puesto ) {
    $usuario1 = new Usuario ($nombre, $apellidos, $usuario, $claveCifrada, $puesto);

    $usuario1->addUsuario();


    $h = new H("4", "Usuario: {$usuario} creado con éxito");

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
