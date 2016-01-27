<?php

  require_once("libs/template_engine.php");
  require_once("models/clientes.model.php");
  function run(){
    $htmlData = array();
    $htmlData["mostrarErrores"] = false;
    $htmlData["errores"] = array();
    $htmlData["txtUserName"] = "";
    $htmlData["txtEmail"]="";
    $htmlData["txtName"]="";
    
    if(isset($_POST["btnRegister"])){
      $htmlData["txtUserName"] = $_POST["txtUserName"];
      $htmlData["txtEmail"] =  $_POST["txtEmail"];
      $htmlData["txtName"] = $_POST["txtName"];
      $pswd = $_POST["txtPswd"];
      $pswdCnf = $_POST["txtPswdCnf"];
      
      if($pswd == $pswdCnf){
        //seguir proceso de registro
        // verificar que el usuario no exista previamente
        $checkUser = obtenerUsuario( $htmlData["txtUserName"]);
        if(count($checkUser)>0){
          $htmlData["mostrarErrores"] = true;
          $htmlData["errores"][]=array("errmsg"=>"Nombre de Usuario ya Usado!");
        }else{
          
          $pswdSalted = "";
          $pswdSalted = $pswd . "pimienta";

          
          $pswdSalted = md5($pswdSalted);
          
          insertCliente($htmlData["txtUserName"],$htmlData["txtName"],
                        $htmlData["txtEmail"],$pswdSalted);
        }
        
        
      }else{
        $htmlData["mostrarErrores"] = true;
        $htmlData["errores"][]=array("errmsg"=>"Contraseñas no coinciden");
      }
    }
    
    renderizar("registro",$htmlData);
  }
 

  run();
?>