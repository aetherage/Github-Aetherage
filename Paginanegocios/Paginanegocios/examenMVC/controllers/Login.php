<?php
    require_once("libs/template_engine.php");
    require_once("models/usuarios.model.php");

    global $errorLogin;
    $errorLogin=array();
    $htmlData = array();
    $htmlData["email"] = "";
    $returnUrl = "";
    $errores = array();

    if(isset($_POST["btnLogin"])){
      $htmlData["email"] = $_POST["txtemail"];
      $pswd =  $_POST["txtPWD"];
      $lstchk= time();
      $usuario = obtenerUsuario($htmlData["email"]);
      if($usuario){
          
          $pswd = md5($pswd);
          if($usuario[0]["UsrPwd"] == $pswd){
            mw_setEstaLogueado($htmlData["email"], true,$usuario[0]["UsrID"],$usuario[0]["UsrRol"]);
            
            header("Location:index.php" . $_POST["returnUrl"]);
            die();
          }else{
            $errorLogin[] = array("errmsg"=>"Credenciales Incorrectas");
          }
        }else{
          $errorLogin[] = array("errmsg"=>"Credenciales Incorrectas");
        }
    }
    
    if(isset($_POST["btnDesconec"])){
        mw_setEstaLogueado($htmlData["email"], false,"","");        
    }
    
    if(isset($_GET["returnUrl"])){
      $returnUrl = urldecode($_GET["returnUrl"]);
    }
    //si llega aqui algo sucedio asi que hay que rendizar nuevamente el login
    $datos = array("txtemail" => $htmlData["email"],
                   "returnUrl" => $returnUrl,
                   "mostrarErrores" => (count($errores)>0),
                   "errores" => $errores);
    


?>