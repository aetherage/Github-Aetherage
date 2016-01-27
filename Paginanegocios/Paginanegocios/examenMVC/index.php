<?php

    session_start();

    require_once("libs/utilities.php");
    $pageRequest = "home";
    $ProductoCodigo = "";
    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }
        
    if(isset($_GET["CodigoProducto"])){
        $_SESSION["CodigoProducto"]= $_GET["CodigoProducto"];
    }
    
    require_once("controllers/site.mw.php");
    require_once("controllers/verificar.mw.php");
    require_once("controllers/Login.php");
    require_once("controllers/registrar.php");
    

    
    switch($pageRequest){
        case "home":
            require_once("controllers/home.control.php");
            break;
        case "producto":
            require_once("controllers/producto.control.php");
            break;
        case "mostrarproducto":
            require_once("controllers/mostrarproducto.control.php");
            break;
        case "carretilla":
            require_once("controllers/carretilla.control.php");
            break;
        case "productoDetalle":
            require_once("controllers/productoDetalle.control.php");
            break;
         case "vision":
            require_once("controllers/vision.control.php");
            break;
        case "contactenos":
            require_once("controllers/contactenos.control.php");
            break;
        default:
            require_once("controllers/error.control.php");

    }

?>
