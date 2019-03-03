
<?php
session_start();

//session_destroy(); exit();
require_once("accdata/bdconf.php");
require_once("accdata/BaseDatos.php");
require_once("Funciones/funcionesGenerales.php");
require_once("vistas/head.php");
require_once("vistas/html.php");
require_once("vistas/body.php");
require_once("Etiquetas/h.php");
require_once("Etiquetas/br.php");
require_once("Etiquetas/select.php");
require_once("Etiquetas/input.php");
require_once("Etiquetas/table.php");
require_once("Etiquetas/a.php");
require_once("Etiquetas/p.php");
require_once("Etiquetas/form.php");
require_once("Etiquetas/div.php");
require_once("Etiquetas/textArea.php");
require_once("Usuario/usuario.php");
require_once("Personaje/personaje.php");
require_once("Programa/programa.php");

$html = new HTML();
$cabecera = new Head();
$titulo = new Titulo("RaccordApp");
$link = new Link ("estilos/estilo.css");
$cabecera->insertar($titulo); //inserto la etiqueta title al head
$cabecera->insertar($link);
$html->insertar($cabecera); //inserto la cabecera <head></head> con sus respectivos titles en el html
$body = new Body();
$form = new Form ("formulario","index.php", "post");

  $botonInicioSesion = $_REQUEST['inicioSesion']??"";
  $botonRegistro = $_REQUEST['registro']??"";
  $botonGuardarDatos = $_REQUEST['enviarDatos']??"";
  $botonCrearPrograma = $_REQUEST['crearPrograma']??"";
  $botonEditarPrograma = $_REQUEST['editarPrograma']??"";
  $botonEditarProgramaSeleccionado = $_REQUEST['editarProgramaSeleccionado']??"";
  $botonEditarPersonaje = $_REQUEST['editarDatosPersonaje']??"";
  $botonGuardarPrograma = $_REQUEST['guardarPrograma']??"";
  $botonConsultarPrograma = $_REQUEST['consultarPrograma']??"";
  $botonConsultarDatos = $_REQUEST['consultarDatos']??"";
  $botonConsultarDatosPersonajes = $_REQUEST['consultarDatosPersonajes']??"";
  $botonEditarPersonajeFormulario = $_REQUEST['editarDatosPersonajeFormulario']??"";
  $botonCrearPersonaje = $_REQUEST['crearPersonaje']??"";
  $botonDatosCrearPersonaje = $_REQUEST['crearDatosPersonaje']??"";
  $botonCrearDatosCrearPersonaje = $_REQUEST['crearDatosPersonajeDefinitivo']??"";

  $cerrarSes = $_REQUEST['cerrarSesion']??"";

  if ($cerrarSes) {
    unset($_SESSION['user']);
  }

  if ($botonRegistro) {
    require_once("paginas/registro.php");
  }elseif ($botonInicioSesion || $_SESSION['user']) {
    if (!$_SESSION['user']) {
      $usuarioIniciarSesion = $_REQUEST['inputUsuario']??"";
      $passIniciarSesion = $_REQUEST['inputPass']??"";

      $bbdd = new BaseDatos('localhost', 'root', '' ,'raccord', '8889');
      $validado = $bbdd->comprobarUsuario($usuarioIniciarSesion, $passIniciarSesion);
      if ($validado) {
        $_SESSION['user'] = $usuarioIniciarSesion;
        require_once("paginas/sesionIniciada.php");
      }else{
        unset($_SESSION['user']);
        header("Location: {$_SERVER[HTTP_HOST]}{$_SERVER['PHP_SELF']}");
      }
    }else{

      if ($botonCrearPrograma) {
        require_once("paginas/crearPrograma.php");
      }elseif ($botonGuardarPrograma) {
        require_once("paginas/guardarPrograma.php");
      }elseif ($botonConsultarPrograma) {
        require_once("paginas/consultarPrograma.php");
      }elseif ($botonEditarPrograma) {
        require_once("paginas/editarPrograma.php");
      }elseif ($botonEditarProgramaSeleccionado) {
        require_once("paginas/editarProgramaSeleccionado.php");
      }elseif ($botonEditarPersonaje) {
        require_once("paginas/editarPersonaje.php");
      }elseif ($botonEditarPersonajeFormulario) {
        require_once("paginas/editarPersonajeFormulario.php");
      }elseif ($botonConsultarDatos) {
        require_once("paginas/elegirPersonaje.php");
      }elseif ($botonConsultarDatosPersonajes) {
        require_once("paginas/consultarDatosPrograma.php");
      }elseif ($botonCrearPersonaje) {
        require_once("paginas/crearPersonaje.php");
      }elseif ($botonDatosCrearPersonaje) {
        require_once("paginas/crearDatosPersonajeFormulario.php");
      }elseif ($botonCrearDatosCrearPersonaje) {
        require_once("paginas/crearDatosPersonaje.php");
      } else{
        require_once("paginas/sesionIniciada.php");
      }
    }
  }elseif($botonGuardarDatos) {
    require_once("paginas/usuarioRegistrado.php");
  }else{
    require_once("paginas/inicioSesion.php");
  }

  $body->insertar($form);
  $html->insertar($body);
  echo $html;

 ?>
