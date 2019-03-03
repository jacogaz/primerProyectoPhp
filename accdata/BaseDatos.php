<?php

  class BaseDatos{
    private $BBDD;
    private $PASS;
    private $HOST;
    private $US;
    private $PORT;

    function __construct($HOST, $US, $PASS, $BBDD, $PORT){

      $this->HOST = $HOST;
      $this->US = $US;
      $this->PASS = $PASS;
      $this->BBDD = $BBDD;
      $this->PORT = $PORT;
      $this->con = new mysqli();

    }

    function crearConsulta($table, $values){

      $consulta1="INSERT INTO $table (";
      $consulta2=" VALUES (";
      foreach ($values as $key=>$value){
          $consulta1=$consulta1."$key,";
          $consulta2=$consulta2."?,";
      }
      $consulta1=substr($consulta1,0,-1);
      $consulta1=$consulta1.")";
      $consulta2=substr($consulta2,0,-1);
      $consulta2=$consulta2.")";

      $consulta=$consulta1.$consulta2;
      return $consulta;
    }


    function insertarConsulta($values, $consulta){

      $this->con->connect($this->HOST, $this->US, $this->PASS, $this->BBDD, $this->PORT);
      if ($this->con) {
        $contador=0;
        $tipos="";
        $valores=array();


        foreach($values as $valor){
          $tipos=$tipos.$valor[0];
          $valores[$contador]=$valor[1];
          $contador++;
        }

          $stmt=$this->con->prepare($consulta);
          $stmt->bind_param($tipos, ...$valores);
          $stmt->execute();
          $stmt->close();
          $this->con->close();
      }
    }

    function crearConsultaActualizar($table, $data, $codigo){
      $consulta1 = "UPDATE $table"." SET ";
      $consulta2 = "WHERE codPersonaje='$codigo';";

      foreach ($data as $key => $value) {
        if ($value[0]=="s") {
          $consulta1 = $consulta1.$key."="."'$value[1]'".",";
        }else{
          $consulta1 = $consulta1.$key."=".$value[1].",";
        }

      }

      $consulta1 = substr($consulta1,0,-1);

      $consulta = $consulta1.$consulta2;

      return $consulta;

    }

    function comprobarUsuario($usuario, $clave){

      $this->con->connect($this->HOST, $this->US, $this->PASS, $this->BBDD, $this->PORT);
      $validado = false;
      if ($this->con) {

        $sql = "SELECT pass FROM usuarios WHERE nombre_usuario='$usuario'";

        //$resultado = $this->con->prepare($sql);
        $rest= $this->con->query($sql);

        if($rest->num_rows==1){

          $row=$rest->fetch_assoc();

          if (password_verify($clave, $row['pass'])) {

            $validado = true;
          }
        }

        $this->con->close();

      /*  $resultado->execute(array("nombre_usuario"=>$usuario));
        while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
          if (password_verify($clave, $registro['pass'])) {
            $validado = true;
          }
        }*/
      }

      return $validado;
    }


    function consultar($tabla){

      $datos = [];
      $this->con->connect($this->HOST, $this->US, $this->PASS, $this->BBDD, $this->PORT);

      if ($this->con) {

        $sql = "SELECT * from $tabla";
        $rest = $this->con->query($sql);
        while($row = $rest->fetch_assoc()){
          array_push($datos,[$row['nombre'], $row['cod']]);
        }
        $this->con->close();
      }
      return $datos;
    }

    function consultarDatos($tabla, $cod){

      $datos = [];
      $this->con->connect($this->HOST, $this->US, $this->PASS, $this->BBDD, $this->PORT);

      if ($this->con) {

        $sql = "SELECT * from $tabla WHERE codPersonaje = '$cod' ";
        $rest = $this->con->query($sql);
        while($row = $rest->fetch_assoc()){
          array_push($datos,$row['nombreActor'], $row['nombrePersonaje'], $row['infoAdicional'], $row['descripcionVestuario']);
        }
        $this->con->close();
      }
      return $datos;
    }

    function consultarPersonaje($tabla, $cod){

      $datos = [];
      $this->con->connect($this->HOST, $this->US, $this->PASS, $this->BBDD, $this->PORT);

      if ($this->con) {

        $sql = "SELECT * from $tabla WHERE codSerie = $cod ";
        $rest = $this->con->query($sql);
        while($row = $rest->fetch_assoc()){
          array_push($datos,[$row['nombrePersonaje'], $row['codPersonaje']]);
        }
        $this->con->close();
      }
      return $datos;
    }

    function consultarDatosPersonaje($tabla, $cod){

      $datos = [];
      $this->con->connect($this->HOST, $this->US, $this->PASS, $this->BBDD, $this->PORT);

      if ($this->con) {

        $sql = "SELECT * from $tabla WHERE codPersonaje = $cod ";
        $rest = $this->con->query($sql);
        while($row = $rest->fetch_assoc()){
          array_push($datos, $row['codSerie'],$row['nombreActor'], $row['nombrePersonaje'], $row['infoAdicional'], $row['descripcionVestuario'],  $row['codPersonaje']);
        }
        $this->con->close();
      }

      return $datos;
    }
  }



 ?>
