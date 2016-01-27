<?php
/* Home Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/Productos.model.php");
  function run(){
    $htmlData["errores"] = array();
    $htmlData["Cuenta"] = "";
    $htmlData["Rol"] = "";
    if(isset($_SESSION["userName"])){
      $htmlData["Cuenta"]=$_SESSION["userName"];
      $htmlData["Rol"]=$_SESSION["Rol"];
    }

    if($htmlData["Rol"]=="Administrador"){
      if(isset($_POST["btnProducto"])){
      
      if(verificar_Texto2($_POST["txtCodigo"]) and verificar_Texto2($_POST["txtNombre"])){
        if(verificar_Numero($_POST["txtPrecio"]) and verificar_Numero($_POST["txtExistencia"])){
        $htmlData["Codigo"] = $_POST["txtCodigo"];
        $htmlData["Nombre"] =  $_POST["txtNombre"];
        $htmlData["Precio"] =  $_POST["txtPrecio"];
        $htmlData["Existencia"] =  $_POST["txtExistencia"];
        
          $ruta="public/img";
         // $_FILES["imagen"]=$_POST["imagen"];
         if($_FILES["imagen"]['name']==""){
          $ruta=$ruta."/DEFAULT.png";
         }else{
          $archivo=$_FILES["imagen"]['tmp_name'];
          $archivonombre=$_FILES["imagen"]['name'];  
          move_uploaded_file($archivo,$ruta."/".$archivonombre);
          $ruta=$ruta."/".$archivonombre;
         }
         $lstchk= time();
       
        InsertarRegistro($htmlData["Codigo"],
                         $htmlData["Nombre"],
                         $htmlData["Precio"],
                         $htmlData["Existencia"],
                         $lstchk,
                         $ruta);
        }else{
          $htmlData["errores"][]=array("errmsg"=>"El precio y la existencia deben ser numericos");
        }
      }else{
        $htmlData["errores"][]=array("errmsg"=>"Campo codigo esta vacio");
      }
    }
    renderizar("Producto",$htmlData);  
    }else {
      mw_redirect();
    }
  }
 

  run();
?>