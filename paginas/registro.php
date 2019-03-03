<?php

  if (!function_exists('dieProgram')) {
    require_once("../Funciones/funcionesGenerales.php");
    die("No puede acceder a esta pagina");
  }


    $formRegistro = new Form ("formulario","index.php", "post");
    $tabla = new Table();
    $tr = new Tr();
    $inputNombre = new Input("text", "nombre","nombre", "", "Nombre: ");
    $tdInputNombre = new Td($inputNombre);
    $tr->insertar($tdInputNombre);
    $tabla->insertar($tr);
    $tr1 = new Tr();
    $inputApellidos = new Input("text", "apellidos","apellidos","", "Apellidos: ");
    $tdInputApellidos = new Td($inputApellidos);
    $tr1->insertar($tdInputApellidos);
    $tabla->insertar($tr1);
    $tr2 = new Tr();
    $inputUsuario = new Input("text", "usuario","usuario", "", "Usuario: ");
    $tdInputUsuarioRegistro = new Td($inputUsuario);
    $tr2->insertar($tdInputUsuarioRegistro);
    $tabla->insertar($tr2);
    $tr3 = new Tr();
    $inputPassRegistro = new Input("password", "pass","pass", "", "Contraseña: ");
    $tdInputPassRegistro = new Td($inputPassRegistro);
    $tr3 ->insertar($tdInputPassRegistro);
    $tabla->insertar($tr3);
    $tr4 = new Tr();
    $selectPuesto = new Select("puesto", "puesto");
    $option1 = new Option ("sastre", "Sastre");
    $option2 = new Option ("estilista", "Estilista");
    $option3 = new Option ("ayudante", "Ayudante");
    $option4 = new Option ("auxiliar", "Auxiliar");
    $option5 = new Option ("figurinista", "Figurinista");
    $selectPuesto->insertar($option1);
    $selectPuesto->insertar($option2);
    $selectPuesto->insertar($option3);
    $selectPuesto->insertar($option4);
    $selectPuesto->insertar($option5);
    $tdSelectPuesto = new Td($selectPuesto);
    $tr4->insertar($tdSelectPuesto);
    $tabla->insertar($tr4);
    $tr5 = new Tr();
    $botonGuardar = new Input("submit", "enviarDatos", "enviarDatos", "Guardar");
    $tdGuardar = new Td($botonGuardar);
    $tr5->insertar($tdGuardar);
    $tabla->insertar($tr5);
    $tr6 = new Tr();
    $botonVolver = new Input("submit", "volver", "volver", "Volver");
    $tdVolver = new Td($botonVolver);
    $tr6->insertar($tdVolver);
    $tabla->insertar($tr6);


    $divRegistro = new Div("contenedorRegistro");
    $divRegistro->insertar($tabla);
    $formRegistro->insertar($divRegistro);
    $body->insertar($formRegistro);



 ?>
