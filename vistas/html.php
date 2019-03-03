<?php

  class HTML extends Contenedor{

    private $etiquetas;

    function __construct(){
      $this->etiquetas = [];
    }

    function insertar(Contenedor $etiqueta){
      $this->etiquetas[] = $etiqueta;
    }

    function __toString(){
      $ret = "<!DOCTYPE html><html>";
      foreach ($this->etiquetas as $etiqueta) {
        $ret.=$etiqueta;
      }
      $ret.= "</html>";
      return $ret;
    }
  }

 ?>
