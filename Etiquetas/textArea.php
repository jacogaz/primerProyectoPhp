<?php

class TextArea extends Body{

  private $clase;
  private $id;
  private $name;
  private $cols;
  private $rows;
  private $valor;
  private $placeholder;
  private $readonly;

function __construct($name= "", $cla = "", $valor="", $cols="", $rows="", $ph="", $readO=""){
    $this->name = $name;
    $this->clase = $cla;
    $this->valor = $valor;
    $this->cols = $cols;
    $this->rows = $rows;
    $this->placeholder = $ph;
    $this->readonly = $readO;
  }

  function __toString(){
    return "<textarea name='{$this->name}' class='{$this->clase}' cols='{$this->cols}' rows='{$this->rows}' placeholder='{$this->placeholder}' {$this->readonly}>{$this->valor}</textarea>";
  }

}


 ?>
