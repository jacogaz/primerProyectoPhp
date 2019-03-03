<?php

  class H extends Body{

    protected $tipo;
    protected $valor;

    function __construct($tipoH, $valorH){
      $this->tipo = $tipoH;
      $this->valor = $valorH;
    }

    function __toString(){
      return "<h{$this->tipo}>{$this->valor}</h{$this->tipo}>";
    }
  }

 ?>
