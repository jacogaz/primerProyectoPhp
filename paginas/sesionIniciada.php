<?php

if (!function_exists('dieProgram')) {
  require_once("../Funciones/funcionesGenerales.php");
}
dieProgram();


$formElegirOpcion = new Form("formulario", "index.php", "post");
$divBotones = new Div("contenedorBotones");
$botonCrearPrograma = new Input("submit", "crearPrograma", "crearPrograma", "Crear Programa");
$botonCerrarSesion = new Input("submit", "cerrarSesion", "cerrarSesion", "Cerrar Sesion");
$botonEditarPrograma = new Input("submit", "editarPrograma", "cerrarSesion", "Editar Personaje");
$botonConsultarPrograma = new Input("submit", "consultarPrograma", "consultarPrograma", "Consultar Programa");
$botonCrearPersonaje = new Input("submit", "crearPersonaje", "crearPersonaje", "Crear Personaje");
$divTextoInformativo = new Div("contenedorTexto");
$pCrear = new P ("pInformativoCrear", "pInformativoCrear", "Pulsando crear programa accederás a crear un proyecto nuevo, bien Serie de TV o Pelicula.");
$pConsultar = new P ("pInformativo", "pInformativo", "Pulsando consultar programa accederás a consultar un proyecto, bien Serie de TV o Pelicula, también podrás editar el programa que selecciones.");

$divBotones->insertar($botonCrearPrograma);
$divBotones->insertar($botonConsultarPrograma);
$divBotones->insertar($botonEditarPrograma);
$divBotones->insertar($botonCrearPersonaje);
$divBotones->insertar($botonCerrarSesion);

$divTextoInformativo->insertar($pCrear);
$divTextoInformativo->insertar($pConsultar);

$formElegirOpcion->insertar($divBotones);
$formElegirOpcion->insertar($divTextoInformativo);

$body->insertar($formElegirOpcion);

?>
