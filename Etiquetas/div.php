<?php

  class Div extends Contenedor{
    private $id;
    private $etiquetas;

    function __construct($valor=""){
      $this->id = $valor;
      $this->etiquetas = [];
    }

    function insertar(Contenedor $etiqueta){
      $this->etiquetas [] = $etiqueta;
    }

    function __toString(){
      $ret = "<div id='{$this->id}'>";
      foreach ($this->etiquetas as $etiqueta) {
        $ret.=$etiqueta;
      }

      $ret.="</div>";

      return $ret;
    }
  }


 ?>
