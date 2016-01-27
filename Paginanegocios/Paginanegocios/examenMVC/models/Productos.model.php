<?php
    //modelo de datos de productos
    require_once("libs/dao.php");
    
    function InsertarRegistro($PrtCodigo,$PrtNombre,$PrtPrecio,$PrtExistencia,$PrtFecha,$ruta){
        
        $strsql = "INSERT INTO producto(PrtCodigo,PtrNombre,PrtPrecio,PtrExistencia,PtrFchRegistro,PtrImagen)
                   VALUES
                    ('%s','%s','%f','%d',FROM_UNIXTIME(%s),'%s');";
        $strsql = sprintf($strsql,$PrtCodigo,$PrtNombre,$PrtPrecio,$PrtExistencia,$PrtFecha,$ruta);
        
        if(ejecutarNonQuery($strsql)){
            return getLastInserId();
        }
        return 0;
    }
    
    function obtenerProductos(){
        $productos = array();
        $sqlstr = "select * from producto;";
        $productos = obtenerRegistros($sqlstr);
        return $productos;
    }
    
      function obtenerCarretilla($Usuario){
        $productos = array();
        $sqlstr = "SELECT cd.CrtId,p.PtrNombre,p.PrtId, CrtDtlCantidad, CrtDtlPrecio, p.PtrImagen
                    FROM empresa.carritodetalle cd inner join empresa.producto p on p.PrtId=cd.PrtId
                    inner join empresa.carrito c on c.CrtId=cd.CrtId
                    where CrtEstado='ACT' and UsrID='%d';";
        $sqlstr = sprintf($sqlstr,$Usuario);
        $productos = obtenerRegistros($sqlstr);
        return $productos;
    }
    
    
    function CrearPedido($UsrID,$PddfchRegistro,$Datos){
        $strsql = "INSERT INTO empresa.pedido(UsrID,PddfchRegistro)
                   VALUES
                    ('%d',FROM_UNIXTIME(%s));";
        $strsql = sprintf($strsql,$UsrID,$PddfchRegistro);
        $actualizar="UPDATE empresa.carrito SET CrtEstado='DES' WHERE CrtId='%d';";
        $actualizar = sprintf($actualizar,$Datos["carretilla"][0]["CrtId"]);
        ejecutarNonQuery($actualizar);
        if(ejecutarNonQuery($strsql)){
            CrearDetalle($Datos);
            return getLastInserId();
        }
        
        return 0;
    }
    
    function CrearDetalle($datos)
    {
        $Codigo = "Select * from empresa.pedido order by PddID DESC LIMIT 1";
        $Codigo = obtenerRegistros($Codigo);
        foreach($datos["carretilla"] as $precios){
            $sqlstr = "INSERT INTO detallepedido(PddID,PrtId,Cantidad,PrecioVenta)
                    VALUES
                    ('%d','%d','%d','%f');";
            $strsql = sprintf($sqlstr,$Codigo[0]["PddID"],$precios["PrtId"],$precios["CrtDtlCantidad"],$precios["CrtDtlPrecio"]);
            ejecutarNonQuery($strsql);
        }
        
        return 0;
    }
    
?>