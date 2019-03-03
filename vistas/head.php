<?php

 abstract class Contenedor{
   abstract function insertar(Contenedor $obj);
   abstract function __toString();
}

class Head extends Contenedor{

  private $titulos;

  function __construct(){
    $this->titulos = [];
  }

  function insertar(Contenedor $titulo){
    $this->titulos[]=$titulo;
  }

  function __toString(){
    $ret = "<head>";
    foreach ($this->titulos as $titulo) {
      $ret.=$titulo;
    }
    $ret .= "</head>";
    return $ret;
  }
}

class Titulo extends Head{

  protected $titulo;

  function __construct($valor = ""){
    $this->titulo = $valor;
  }

  function __toString(){
    return "<title>".$this->titulo."</title>";
  }

}
class Link extends Head{
  protected $rel;
  protected $href;

  function __construct($href = ""){
    $this->rel = "stylesheet";
    $this->href = $href;
  }

  function __toString(){
    return "<link rel={$this->rel} href={$this->href}>";
  }

}


 ?>
