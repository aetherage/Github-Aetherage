<?php
    require_once("libs/dao.php");
    
    function guardarUsuario($email, $nombre, $pswd,$fch){
        
        $sqlInsert = "INSERT INTO usuarios (UsrCorreo,UsrName,UsrPwd,UsrFchRegistro)
                      VALUES('%s','%s','%s',now());";
        $strsql = sprintf($sqlInsert,$email, $nombre, $pswd,$fch);
        if(ejecutarNonQuery($strsql)){
            return getLastInserId();
        }
    }
    
    function obtenerUsuario($email){
        $usuario = array();
        $sqlstr = sprintf("Select * from usuarios where UsrCorreo = '%s';",$email);
        $usuario = obtenerUnRegistro($sqlstr);
        return $usuario;
    }
    
    function registrarLogonExitoso($email){
        global $conn;
        $sqlupdate = "update usuarios set usuariopwdfallido = 0, usuariolastlogin = now() where usuarioemail = '%s';";
        return ejecutarNoQuery($conn, sprintf($sqlupdate,$email));
    }
    
?>