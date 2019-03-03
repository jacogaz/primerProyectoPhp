<?php

if (!function_exists('dieProgram')) {
  require_once("../Funciones/funcionesGenerales.php");
}
dieProgram();


$codPersonaje = $_REQUEST['selectPersonajeEditar']??"";

if ($codPersonaje) {
  $program = new Programa();
  $consulta = $program->consultarDatosPersonajes('Personajes', $codPersonaje);


  $formRegistro = new Form ("formulario","index.php", "post");
  $tabla = new Table();
  $tr = new Tr();
  $codFor = new Input("hidden", "codForanea","nombreActor", $consulta[0],"");
  $codPerson = new Input("hidden", "codPerson","nombreActor", $consulta[5],"");
  $nombreActor = new Input("text", "nombreActor","nombreActor", $consulta[1],"");
  $tdNombreActor = new Td($nombreActor);
  $tr->insertar($tdNombreActor);
  $tabla->insertar($tr);
  $tr1 = new Tr();
  $nombrePersonaje = new Input("text", "nombrePersonaje","nombreActor",$consulta[2], "");
  $tdNombrePersonaje = new Td($nombrePersonaje);
  $tr1->insertar($tdNombrePersonaje);
  $tabla->insertar($tr1);
  $tr2 = new Tr();
  $textAreaInfoAdi = new TextArea("infoAdi", "infoAdicional", $consulta[3], "30", "8");
  $tdTextAreaInfoAdi = new Td($textAreaInfoAdi);
  $tr2->insertar($tdTextAreaInfoAdi);
  $tabla->insertar($tr2);
  $tr3 = new Tr();
  $inputPassRegistro = new TextArea("descriVestu", "infoAdicional", $consulta[4], "30", "8");
  $tdInputPassRegistro = new Td($inputPassRegistro);
  $tr3 ->insertar($tdInputPassRegistro);
  $tabla->insertar($tr3);
  $tr5 = new Tr();
  $botonEditarPersonajeFormulario = new Input("submit", "editarDatosPersonajeFormulario", "editarDatosPersonajeFormulario", "Editar");
  $tdGuardar = new Td($botonEditarPersonajeFormulario);
  $tr5->insertar($tdGuardar);
  $tabla->insertar($tr5);
  $tr6 = new Tr();
  $botonVolver = new Input("submit", "volver", "editarDatosPersonajeFormulario", "Volver");
  $tdVolver = new Td($botonVolver);
  $tr6->insertar($tdVolver);
  $tabla->insertar($tr6);


  $divRegistro = new Div("editarPersonajes");
  $formRegistro->insertar($codFor);
  $formRegistro->insertar($codPerson);
  $divRegistro->insertar($tabla);
  $formRegistro->insertar($divRegistro);
  $body->insertar($formRegistro);
}else{
  $h = new H("4", "Error");

  $aRegistro = new A("index.php", "Volver");

  $body->insertar($h);
  $body->insertar($aRegistro);
}



 ?>
