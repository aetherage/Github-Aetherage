<?php
/* Home Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/servidores.model.php");
  function run(){ 
      $datosARenderizar = array();
      $datosARenderizar["servidores"] = registros();      
      renderizar("mostrar",$datosARenderizar);
  }
 

  run();
?>