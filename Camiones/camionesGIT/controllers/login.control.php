<?php
/* Login Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/clientes.model.php");
  
  function run(){  
    $userName = "";
    $returnUrl = "";
    $errores = array();
    if(isset($_POST["btnLogin"])){
        $userName = $_POST["txtUser"];
        $pswd = $_POST["txtPswd"];
        $returnUrl = $_POST["returnUrl"];
        $usuario = obtenerUsuario($userName)[0];
        
        if($usuario){
          $salt = "pimienta";
            $pswd = $pswd . $salt;
          
          $pswd = md5($pswd);
          if($usuario["usuariopwd"] == $pswd){
            mw_setEstaLogueado($userName, true);
            header("Location:index.php" . $_POST["returnUrl"]);
            die();
          }else{
            $errores[] = array("errmsg"=>"Credenciales Incorrectas");
          }
        }else{
          $errores[] = array("errmsg"=>"Credenciales Incorrectas");
        }
    }
    
    if(isset($_GET["returnUrl"])){
      $returnUrl = urldecode($_GET["returnUrl"]);
    }
    //si llega aqui algo sucedio asi que hay que rendizar nuevamente el login
    $datos = array("txtUser" => $userName,
                   "returnUrl" => $returnUrl,
                   "mostrarErrores" => (count($errores)>0),
                   "errores" => $errores);
    
    renderizar("login", $datos);
    
  }
 
  run();
?>