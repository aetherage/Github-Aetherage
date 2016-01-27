<?php
/* Home Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/servidores.model.php");
  function run(){
    $htmlData = array();
    
    if(isset($_POST["btnIngresar"])){
      $htmlData["name"] = $_POST["txtNombre"];
      $htmlData["iP"] =  $_POST["txtIp"];
      $htmlData["so"] =  $_POST["txtSo"];
      $htmlData["ram"] =  $_POST["txtRam"];
      $htmlData["cpu"] =  $_POST["txtCpu"];
      $htmlData["red"] =  $_POST["txtRed"];
      $htmlData["disco"] =  $_POST["txtDisco"];
      $htmlData["espacio"] =  $_POST["txtEspacio"];
      $htmlData["estado"] =  $_POST["txtEstado"];
      $lstchk= time();
          
      InsertarServidor($htmlData["name"],
                    $htmlData["iP"],
                    $htmlData["so"],
                    $htmlData["ram"],
                    $htmlData["cpu"],
                    $htmlData["red"],
                    $htmlData["disco"],
                    $htmlData["espacio"],
                    $htmlData["estado"],
                    $lstchk);
    }
    
    renderizar("ingresar",$htmlData);  
    
  }
 

  run();
?>