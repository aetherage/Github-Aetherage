<?php
    session_start();
    $_SESSION = array(); 
    require_once("libs/utilities.php");
    $pageRequest = "home";
    
    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }
    //Incorporando los midlewares son codigos que se deben ejecutar
    //Siempre
    require_once("controllers/site.mw.php");
    require_once("controllers/verificar.mw.php");
    //Este switch se encarga de todo el enrutamiento
    switch($pageRequest){
        case "home":
            //llamar al controlador
            require_once("controllers/home.control.php");
            break;
        case "login":
            require_once("controllers/login.control.php");
            break;
        case "registro":
            require_once("controllers/registro.control.php");
            break;
        //para agregar una nueva pagina
        // agregar otro case
        //-----------------------------------------------------//
        // CAMIONES
        case "camiones":
            require_once("controllers/camiones.control.php");
            break;
        case "camion":
            require_once("controllers/camion.control.php");
            break;
        //-----------------------------------------------------//
        // CLIENTES
        case "clientes":
            require_once("controllers/clientes.control.php");
            break;
        case "cliente":
            require_once("controllers/cliente.control.php");
            break;
        //-----------------------------------------------------//
        // EMPLEADOS
        case "empleados":
            require_once("controllers/empleados.control.php");
            break;
        case "empleado":
            require_once("controllers/empleado.control.php");
            break;
        //-----------------------------------------------------//
        // FACTURACION
        case "facturas":
                require_once("controllers/facturas.control.php");
                break;
        case "factura":
                require_once("controllers/factura.control.php");
                break;
        //-----------------------------------------------------//
        // RUTAS TRANSITADAS    
        case "rutas":
                require_once("controllers/rutas.control.php");
                break;
        case "ruta":
                require_once("controllers/ruta.control.php");
                break;
        //-----------------------------------------------------//
        
                case "ruta":
                require_once("controllers/compras.control.php");
                break;
        default:
            require_once("controllers/error.control.php");
    }

?>
