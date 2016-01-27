<?php
/* Home Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/Detalles.model.php");
  
  function run(){
    $htmlData = ProductoXCodigo($_SESSION["CodigoProducto"]);
         $htmlData["Cuenta"] = "";
    if(isset($_SESSION["userName"])){
      $htmlData["Cuenta"]=$_SESSION["userName"];  
    }
    
          if(isset($_POST["btnAgregar"])){

        

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


      }
    //die(print_r($htmlData));
    renderizar("productoDetalle", $htmlData);  
    
  }

  run();
?>