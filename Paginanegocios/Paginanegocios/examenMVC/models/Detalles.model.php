<?php
    //modelo de datos de productos
    require_once("libs/dao.php");
    
    function ProductoXCodigo($codigo){
        $productos = array();
        $sqlstr =sprintf("select * from producto where PrtCodigo = '%s';",$codigo);
        $productos = obtenerUnRegistro($sqlstr);
        return $productos[0];
    }
    
    function DatosCarretilla($Usuario,$lstchk){
        $strsql = "INSERT INTO carrito(UsrID,CrtfchCreacion,CrtModificacion,CrtEstado)
                   VALUES
                    (%d,FROM_UNIXTIME(%s),FROM_UNIXTIME(%s),'ACT');";
        $strsql = sprintf($strsql,$Usuario,$lstchk,$lstchk);

        if(ejecutarNonQuery($strsql)){
            return getLastInserId();
        }
        
        return 0;
    }
    
    function DetallesCarretilla($Usuario,$IDProducto,$Cantidad,$Precio)
    {
        $Codigo=Carretilla($Usuario);
        $sqlstr = "INSERT INTO carritodetalle(CrtId,PrtId,CrtDtlCantidad,CrtDtlPrecio)
                VALUES
                ('%d','%d','%d','%f');";
        $strsql = sprintf($sqlstr,$Codigo["CrtId"],$IDProducto,$Cantidad,$Precio);
        ejecutarNonQuery($strsql);

        return 0;
    }
    
    function Carretilla($Usuario)
    {
        $Codigo = "Select * from carrito where UsrID=".$Usuario." order by CrtId DESC LIMIT 1;";
        $Codigo = obtenerRegistros($Codigo);
        if(isset($Codigo[0])){
            return $Codigo[0];
        }
        return 0;
    }
    
?>