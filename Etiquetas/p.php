<?php
class P extends Body{

  private $clase;
  private $id;
  private $valor;

  function __construct($cla = "", $id="", $valor=""){
    $this->clase = $cla;
    $this->id = $id;
    $this->valor = $valor;
  }

  function __toString(){
    return "<p class='{$this->clase}' id='{$this->id}'>{$this->valor}</p>";
  }


}

 ?>
