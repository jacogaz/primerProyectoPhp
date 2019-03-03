<?php

  if (!function_exists('dieProgram')) {
    require_once("../Funciones/funcionesGenerales.php");
  }
  dieProgram();

  $codPersonaje = $_REQUEST['selectProyecto']??"";

  if ($codPersonaje) {
    $formRegistro = new Form ("formulario","index.php", "post");
    $codFor = new Input("hidden", "codForanea","nombreActor", $codPersonaje,"");
    $tabla = new Table();
    $tr = new Tr();
    $nombreActor = new Input("text", "nombreActor","nombreActor", "","Nombre Actor: ");
    $tdNombreActor = new Td($nombreActor);
    $tr->insertar($tdNombreActor);
    $tabla->insertar($tr);
    $tr1 = new Tr();
    $nombrePersonaje = new Input("text", "nombrePersonaje","nombreActor","", "Nombre Personaje: ");
    $tdNombrePersonaje = new Td($nombrePersonaje);
    $tr1->insertar($tdNombrePersonaje);
    $tabla->insertar($tr1);
    $tr2 = new Tr();
    $textAreaInfoAdi = new TextArea("infoAdi", "infoAdicional", "", "30", "8", "Informacion Adicional: ");
    $tdTextAreaInfoAdi = new Td($textAreaInfoAdi);
    $tr2->insertar($tdTextAreaInfoAdi);
    $tabla->insertar($tr2);
    $tr3 = new Tr();
    $inputPassRegistro = new TextArea("descriVestu", "infoAdicional", "", "30", "8", "Descripción Vestuario: ");
    $tdInputPassRegistro = new Td($inputPassRegistro);
    $tr3 ->insertar($tdInputPassRegistro);
    $tabla->insertar($tr3);
    $tr5 = new Tr();
    $botonEditarPersonajeFormulario = new Input("submit", "crearDatosPersonajeDefinitivo", "editarDatosPersonajeFormulario", "Crear");
    $tdGuardar = new Td($botonEditarPersonajeFormulario);
    $tr5->insertar($tdGuardar);
    $tabla->insertar($tr5);
    $tr6 = new Tr();
    $botonVolver = new Input("submit", "volver", "editarDatosPersonajeFormulario", "Volver");
    $tdVolver = new Td($botonVolver);
    $tr6->insertar($tdVolver);
    $tabla->insertar($tr6);


    $divRegistro = new Div("editarPersonajes");
    $divRegistro->insertar($tabla);
    $formRegistro->insertar($divRegistro);
    $formRegistro->insertar($codFor);
    $body->insertar($formRegistro);

  }else{
    $h = new H("4", "Error");

    $aRegistro = new A("index.php", "Volver");

    $body->insertar($h);
    $body->insertar($aRegistro);
  }






?>
