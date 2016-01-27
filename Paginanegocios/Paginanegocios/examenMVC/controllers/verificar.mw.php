<?php
//middleware de verificación

    function mw_estaLogueado(){
        if( isset($_SESSION["userLogged"])
            &&
            $_SESSION["userLogged"] == true){
            return true;
        }
        return false;
    }
    
    function mw_setEstaLogueado($usuario, $logueado,$codido,$Rol){
        if($logueado){
            $_SESSION["userLogged"] = true;
            $_SESSION["userName"] = $usuario;
            $_SESSION["userCodigo"] = $codido;
            $_SESSION["Rol"] = $Rol;
        }else{
            $_SESSION["userLogged"] = false;
            unset($_SESSION["userName"]);
            unset($_SESSION["userCodigo"]);
            unset($_SESSION["Rol"]);
        }
    }
    
    function mw_redirectToLogin($to){
        $loginstring = urlencode("?".$to);
        $url = "index.php?page=login&returnUrl=".$loginstring;
        header("Location:" . $url);
    }
    function mw_redirect(){
        $url = "index.php?page=home";
        header("Location:" . $url);
    }
?>