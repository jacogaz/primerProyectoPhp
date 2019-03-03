<?php

  class Br extends Body{

    protected $etiqueta;

    function __construct(){
      $this->etiqueta = "<br>";
    }

    function __toString(){
      return $this->etiqueta;
    }
  }


 ?>
