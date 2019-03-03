<?php

  class A extends Body{
    protected $href;
    protected $valor;

    function __construct($href = "", $valor=""){
      $this->href = $href;
      $this->valor = $valor;
    }

    function __toString(){
      return "<a href='{$this->href}'>{$this->valor}</a>";
    }
  }

 ?>
