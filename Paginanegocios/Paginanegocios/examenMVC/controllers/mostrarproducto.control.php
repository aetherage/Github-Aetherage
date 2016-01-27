<?php
/* Home Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/Productos.model.php");
  function run(){

    $htmlData["Cuenta"] = "";
    if(isset($_SESSION["userName"])){
      $htmlData["Cuenta"]=$_SESSION["userName"];  
    }
    $htmlData["productos"] = obtenerProductos();

    renderizar("mostrarproducto",$htmlData);
  }
  
  run();
?>