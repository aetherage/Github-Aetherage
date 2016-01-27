<?php

  require_once("libs/template_engine.php");

  require_once("models/camiones.model.php");

  function run(){
    $camiones = array();
    $camiones = obtenerCamiones();
    renderizar("camiones", array("camiones" => $camiones));
  }
 /*
  *  
  function run(){
    if(mw_estaLogueado()){
      $camiones = array();
      $camiones = obtenerCamiones();
      renderizar("camiones", array("camiones" => $camiones));      
    }else {
      mw_redirectToLogin("page=login");
    }
    
  }
  
 */

  run();
?>
