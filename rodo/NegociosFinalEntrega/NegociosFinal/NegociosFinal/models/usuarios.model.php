<?php
    require_once("libs/dao.php");
    
    function obtenerUsuario($userName){
        $usuario = array();
        $sqlstr = sprintf("SELECT id_registro, nombre, correo, contrasenia, UNIX_TIMESTAMP(usuariofching) as usuariofching  FROM muflobase.registro where correo = '%s';",$userName);
        $usuario = obtenerUnRegistro($sqlstr);
        return $usuario;
    }
    
    function insertUsuario($userName, $userEmail,
                           $password,  $timestamp){
        $strsql = "INSERT INTO muflobase.registro
                    (correo, nombre, contrasenia, usuariofching,)
                   VALUES
                    ('%s', '%s','%s',FROM_UNIXTIME(%s));";
        $strsql = sprintf($strsql, valstr($userEmail),
                                    valstr($userName),
                                    $password,
                                    $timestamp);
                                  
        if(ejecutarNonQuery($strsql)){
            return getLastInserId();
        }
        return 0;
    }
    
?>