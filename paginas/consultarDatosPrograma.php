<?php

if (!function_exists('dieProgram')) {
  require_once("../Funciones/funcionesGenerales.php");
}
dieProgram();


  $nomPersonaje= $_REQUEST['selectPersonaje']??"";

  if($nomPersonaje){
    $program = new Programa();
    $datosPrograma = $program->consultarDatosPrograma('Personajes', $nomPersonaje);

    $formRegistro = new Form ("formulario","index.php", "post");

    $infoAdi = new P("pInformativoDescriConsulta", "pInformativoDescriConsulta", "Informacion Adicional: ");
    $infoAdicional = new TextArea("pInfoAdicional", "infoAdicionalConsulta",$datosPrograma[2], "30", "8", "Informacion Adicional: ", "readonly");

    $descripcionVestu = new P("pInformativoDescriConsulta", "pInformativoDescriConsulta", "Descripcion Vestuario: ");
    $descripcionVestuario = new TextArea("pDescripcionVestuario", "infoAdicionalConsultaDescri", $datosPrograma[3], "30", "8", "Descripción Vestuario: ", "readonly");//new P("pDescripcionVestuario", "pDescripcionVestuario", $datosPrograma[3]);

    $divConsultarDatos= new Div("contenedorMostrarPersonaje");
    $botonVolver = new Input("submit", "volverDatosConsulta", "volverDatosConsulta", "Volver");


    $divConsultarDatos->insertar($infoAdi);
    $divConsultarDatos->insertar($infoAdicional);
    $divConsultarDatos->insertar($descripcionVestu);
    $divConsultarDatos->insertar($descripcionVestuario);
    $divConsultarDatos->insertar($botonVolver);

    $formRegistro->insertar($divConsultarDatos);

    $body->insertar($formRegistro);

  }else{
    $h = new H("4", "Error");

    $aRegistro = new A("index.php", "Volver");

    $body->insertar($h);
    $body->insertar($aRegistro);
  }



?>
