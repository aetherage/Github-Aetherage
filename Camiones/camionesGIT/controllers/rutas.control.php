<?php

  require_once("libs/template_engine.php");
  require_once("models/rutas.model.php");

  function run(){
    $rutas = array();
    $rutas = obtenerRutas();
    renderizar("rutas", array("rutas" => $rutas));
  }
 /* 
    function run(){
    if(mw_estaLogueado()){
    $rutas = array();
    $rutas = obtenerRutas();
    renderizar("rutas", array("rutas" => $rutas));      
    }else{
      mw_redirectToLogin("page=login");
    }
    
  }
*/
  run();
?>
