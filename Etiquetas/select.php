<?php

  class Select extends Contenedor{

    private $class;
    private $name;
    private $options;

    function __construct($class="", $name=""){
      $this->class = $class;
      $this->name = $name;
      $this->options = [];
    }

    function insertar(Contenedor $option){
      $this->options[] = $option;
    }

    function __toString(){
      $ret = "<select class='{$this->class}' name='{$this->name}'>";

      foreach ($this->options as $option) {
        $ret.=$option;
      }

      $ret.= "</select>";

      return $ret;
    }
  }

  class Option extends Select{

    protected $valor;
    protected $contenido;

    function __construct($valor="", $contenido=""){
      $this->valor = $valor;
      $this->contenido = $contenido;
    }

    function __toString(){
      return "<option value='{$this->valor}'>{$this->contenido}</option>";
    }
  }

 ?>
