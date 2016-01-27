<?php
    //modelo de datos de productos
    require_once("libs/dao.php");
    function obtenerproductos(){
        $productos = array();
        $sqlstr = "select * from productos;";
        $productos = obtenerRegistros($sqlstr);
        return $productos;
    }
?>