<?php
  function dieProgram(){
    if(!$_SESSION['user']){
      die("No puede acceder a esta pagina");
    }
  }
 ?>
