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
    $htmlData["mostrarErrores"] = false;
    $htmlData["errores"] = array();
    $htmlData["txtNombre"] = "";
    $htmlData["txtemail"]="";
    
    if(isset($_POST["btnInsert"])){
      $htmlData["email"] = $_POST["txtemail"];
      $htmlData["nombre"] =  $_POST["txtNombre"];
      $htmlData["pwd"] =  $_POST["txtPWD"];
      $htmlData["cpwd"] =  $_POST["txtCPWD"];
      if($htmlData["pwd"] == $htmlData["cpwd"]){
        $checkUser = obtenerUsuario($htmlData["email"]);
        if(count($checkUser[0])==7){
          $htmlData["mostrarErrores"] = true;
          $htmlData["errores"][]=array("errmsg"=>"Correo Electrónico ya Usado!");
        }else{
          
          $fchingreso = time(); //date("YmdHisu"); //20141104203730069785
          
          $pswdSalted = md5($htmlData["pwd"]);
          guardarUsuario($htmlData["email"],
                       $htmlData["nombre"],
                       $pswdSalted,
                       $fchingreso);
        }
      }else{
        $htmlData["mostrarErrores"] = true;
        $htmlData["errores"][]=array("errmsg"=>"Contraseñas no coinciden");
      }
    }
    renderizar("registrar",$htmlData);  

  }
 

  run();
?>