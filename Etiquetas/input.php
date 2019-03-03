<?php

  class Input extends Body{

    protected $type;
    protected $id;
    protected $name;
    protected $value;
    protected $placeholder;

    function __construct($tipo="", $name="" ,$id="", $valor="", $placeholder=""){
      $this->type = $tipo;
      $this->name = $name;
      $this->id = $id;
      $this->value = $valor;
      $this->placeholder = $placeholder;
    }

    function __toString(){
      return "<input type='{$this->type}' name='{$this->name}' id='{$this->id}' value='{$this->value}' placeholder='{$this->placeholder}'>";
    }
  }

 ?>
