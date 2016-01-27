<?php

    session_start();
    $_SESSION = array();
    
    require_once("libs/utilities.php");    
    $pageRequest = "home";
    
    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }
    
    require_once("controllers/site.mw.php");
    require_once("controllers/verificar.mw.php");
    
    switch($pageRequest){
        case "home":
            //llamar al controlador
            require_once("controllers/home.control.php");
            break;
        case "productos":
            require_once("controllers/productos.control.php");
            break;
         case "detalle1":
            require_once("controllers/detalle1.control.php");
            break;
        case "detalle2":
            require_once("controllers/detalle2.control.php");
            break;
        case "detalle3":
            require_once("controllers/detalle3.control.php");
            break;
        case "detalle4":
            require_once("controllers/detalle4.control.php");
            break;
        case "detalle5":
            require_once("controllers/detalle5.control.php");
            break;
        case "detalle6":
            require_once("controllers/detalle6.control.php");
            break;
        case "detalle7":
            require_once("controllers/detalle7.control.php");
            break;
        case "detalle8":
            require_once("controllers/detalle8.control.php");
            break;
        case "detalle9":
            require_once("controllers/detalle9.control.php");
            break;
        case "detalle10":
            require_once("controllers/detalle10.control.php");
            break;
        case "detalle11":
            require_once("controllers/detalle11.control.php");
            break;
        case "detalle12":
            require_once("controllers/detalle12.control.php");
            break;
        case "detalle13":
            require_once("controllers/detalle13.control.php");
            break;
        case "detalle14":
            require_once("controllers/detalle14.control.php");
            break;
        case "detalle15":
            require_once("controllers/detalle15.control.php");
            break;
        case "detalle16":
            require_once("controllers/detalle16.control.php");
            break;
        case "detalle17":
            require_once("controllers/detalle17.control.php");
            break;
        case "detalle18":
            require_once("controllers/detalle18.control.php");
            break;
        case "detalle19":
            require_once("controllers/detalle19.control.php");
            break;
        case "nosotros":
            require_once("controllers/nosotros.control.php");
            break;
        case "login":
            require_once("controllers/login.control.php");
            break;
    
         case "ubicacion":
            require_once("controllers/ubicacion.control.php");
            break;
         case "contactanos":
            require_once("controllers/contactanos.control.php");
            break;
           case "cotizar":
            require_once("controllers/cotizar.control.php");
            break;
        case "requerimientos":
            require_once("controllers/requerimientos.control.php");
            break;
         case "registro":
            require_once("controllers/registro.control.php");
            break;
        default:
            require_once("controllers/error.control.php");
    
    }
    
    
?>