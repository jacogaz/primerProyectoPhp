<?php


//require "../clases/generales/usuario.php";
require_once("./vistas/head.php");
require_once("./vistas/body.php");
require "Etiquetas/div.php";
require "Etiquetas/p.php";
require_once("vistas/head.php");
//use gp\clases\generales\Usuario;
use PHPUnit\Framework\TestCase;

class Test extends TestCase{

    public function test__construct(){

        $div=new Div("div1");
        $p = new P("", "", "hola");
        $div->insertar($p);
        $this->assertSame("<div id='div1'><p class='' id=''>hola</p></div>",$div->__toString());

    }

}
