<?php
/* Home Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/Productos.model.php");
  require_once("models/Detalles.model.php");
  function run(){ 
    $htmlData = array();
    $htmlData["errores"] = array();
    $htmlData["Cuenta"] = "";
    if(mw_estaLogueado()){
      if(isset($_SESSION["userName"])){
        $htmlData["Cuenta"]=$_SESSION["userName"];  
      }
      $htmlData["CrtTotal"]=0;
      $htmlData["carretilla"] = obtenerCarretilla($_SESSION["userCodigo"]);
      
      $contador = 0;
      if(isset($_POST["btnAgregar"])){
        $activar='1';
       
        if(isset($htmlData["carretilla"][0]["PrtId"])){
          foreach($htmlData["carretilla"] as $precios){
            if($precios["PrtId"]==$_POST["Codigo"]){
              $activar= '0';
            }
          }
        }
        
        if(verificar_Numero($_POST["txtCantidad"])){
        if($activar){
          $Usuario=$_SESSION["userCodigo"];
          $Cantidad = $_POST["txtCantidad"];
          $precio = $_POST["Txtprecio"];
          $Producto = $_POST["Codigo"];
          $lstchk= time();
          $Codigo["CrtEstado"]="DES";
          $Codigo=Carretilla($Usuario);
          if($Codigo["CrtEstado"]=="DES" or $Codigo["CrtEstado"]==""){
            DatosCarretilla($Usuario,
                            $lstchk
                            );
          }
          $CarretillaID=DetallesCarretilla($Usuario,$Producto,$Cantidad,$precio);
        }else{
          $htmlData["errores"][]=array("errmsg"=>"El producto ya estaba en la carretilla");
        }
        }else{
          $htmlData["errores"][]=array("errmsg"=>"El campo debia ser numerico");
        }
      }
      $htmlData["carretilla"] = obtenerCarretilla($_SESSION["userCodigo"]);
    
      foreach($htmlData["carretilla"] as $precios){
        $htmlData["CrtTotal"] += $precios["CrtDtlCantidad"]*$precios["CrtDtlPrecio"];
        $contador+=1;
      }
      for($i = 0; $i < $contador; $i++){
        $htmlData["carretilla"][$i]["total"]=$htmlData["carretilla"][$i]["CrtDtlCantidad"]*$htmlData["carretilla"][$i]["CrtDtlPrecio"];
      }
      if(isset($_POST["btnComprar"])){
        $Usuario=$_SESSION["userCodigo"];
        $lstchk= time();
        CrearPedido($Usuario,
                         $lstchk,
                         $htmlData
                         );
        mw_redirect();
      }
    //die(print_r($htmlData));
    renderizar("carretilla",$htmlData);
    }else {
      mw_redirect();
    }
  }
 

  run();
?>