<?php

  class Body extends Contenedor{

    private $etiquetas;

    function __construct(){
      $this->etiquetas = [];
    }

    function insertar(Contenedor $etiqueta){
      $this->etiquetas[] = $etiqueta;
    }

    function __toString(){
      $ret = "<body>";

      foreach ($this->etiquetas as $etiqueta) {
        $ret.=$etiqueta;
      }
      $ret .= "</body>";

      return $ret;
    }
  }

 ?>
