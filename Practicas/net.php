<?php

$ruta = "127.0.0.1";
$usuario = "root";
$password = "Sql.inrage.2015";
$basedatos = "fail";
$puerto = "3306";

$conn = mysqli($ruta,$usuario,$password,$basedatos,$puerto);
    if($conn->errno!=0){
            die("Error de Conexion a la Base de Datos Fail");
    }
    echo "No murio.";
           $conn->set_charset('utf8');
           
?>