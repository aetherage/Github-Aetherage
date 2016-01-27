<?php
/* Home Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */

  require_once("libs/template_engine.php");
  require_once("models/usuarios.model.php");
  function run(){
    $htmlData = array();
    
    if(isset($_POST["btnLogin"])){
      $htmlData["email"] = $_POST["txtemail"];
      $htmlData["pwd"] =  $_POST["txtPWD"];
      $lstchk= time();
      $usuario = obtenerUsuario($htmlData["email"]);
      if($usuario){
          if($usuario[0]["UsrPwd"] == $htmlData["pwd"]){
            die("todo bien");
          }else{
              die("no entro en contraseña");
          }
      }else{
        die("no entro en usuario, no se por que");
      }
    }
    renderizar("login",$htmlData);  
    
  }
 

  run();
?>