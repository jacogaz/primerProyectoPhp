<?php

  class Table extends Contenedor{

    private $borde;
    private $tr;

    function __construct($border="0"){
      $this->borde = $border;
      $this->tr = [];
    }

    function insertar(Contenedor $tr){
      $this->tr[]=$tr;
    }

    function __toString(){
      $ret = "<table border='{$this->borde}''>";

      foreach ($this->tr as $etiqueta) {
        $ret.=$etiqueta;
      }

      $ret.="</table>";

      return $ret;
    }
  }

  class Tr extends Contenedor{

    private $td;

    function __construct(){
      $this->td = [];
    }

    function insertar(Contenedor $td){
      $this->td[] = $td;
    }

    function __toString(){
      $ret = "<tr>";

      foreach ($this->td as $etiqueta) {
        $ret.=$etiqueta;
      }
      $ret.="</tr>";

      return $ret;
    }
  }

  class Td extends Tr{

    protected $valor;

    function __construct($valor = ""){
      $this->valor = $valor;
    }

    function __toString(){
      return "<td>".$this->valor."</td>";
    }
  }

 ?>
