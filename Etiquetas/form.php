<?php

  class Form extends Contenedor{
    private $class;
    private $action;
    private $method;
    private $etiquetas;

    function __construct($class = "", $action = "", $method=""){
      $this->class = $class;
      $this->action = $action;
      $this->method = $method;
      $this->etiquetas = [];
    }

    function insertar(Contenedor $etiqueta){
      $this->etiquetas [] = $etiqueta;
    }

    function __toString(){
      $ret = "<form class='{$this->class}' action='{$this->action}' method='{$this->method}'>";
      foreach ($this->etiquetas as $etiqueta) {
        $ret.=$etiqueta;
      }
      $ret .= "</form>";
      return $ret;
    }
  }


 ?>
