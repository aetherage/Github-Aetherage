<?php

  require_once("libs/template_engine.php");

  require_once("models/facturas.model.php");

  function run(){
     //if(mw_estaLogueado()){
    $facturas = array();
    $facturas = obtenerfacturas();
    renderizar("facturas", array("facturas" => $facturas));
   }
  // else
   //   {
     // mw_redirectToLogin("page=facturas");
  //    }
 // }

  run();
?>
