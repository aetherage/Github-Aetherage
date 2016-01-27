<?php
    //modelo de datos de productos
    require_once("libs/dao.php");

    function obtenerFacturas(){
        $facturas = array();
        $sqlstr = "select * from facturas;";
        $facturas = obtenerRegistros($sqlstr);
        return $facturas;
    }
    function obtenerFactura($facturaID){
      $factura = array();
      $sqlstr = "select * from facturas where fac_id = %d;";
      $sqlstr = sprintf($sqlstr, $facturaID);
      $factura = obtenerUnRegistro($sqlstr);
      return $factura;
    }
    
    function insertarFactura($factura){
      if($factura && is_array($factura)){
         $sqlInsert = "INSERT INTO facturas(`cam_id`,`ru_id`,`emp_reg`)VALUES('%d','%d','%s');";
         $sqlInsert = sprintf($sqlInsert,
                        valstr($factura["cam_id"]),
                        valstr($factura["ru_id"]),
                        valstr($factura["emp_reg"])
                      );
         if(ejecutarNonQuery($sqlInsert)){
           return getLastInserId();
         }
      }
      return false;
    }

    function actualizarFactura($factura){
      if($factura && is_array($factura)){
        $sqlUpdate = "update facturas set cam_id='%s', ru_id='%s', emp_reg='%s' where fac_id=%d;";
        $sqlUpdate = sprintf($sqlUpdate,
                        valstr($factura["cam_id"]),
                        valstr($factura["ru_id"]),
                        valstr($factura["emp_reg"]),
                        valstr($factura["fac_id"])
                    );
        return ejecutarNonQuery($sqlUpdate);
      }
      return false;
    }

    function borrarFactura($facturaID){
      if($facturaID){
        $sqlDelete = "delete from facturas where fac_id=%d;";
        $sqlDelete = sprintf($sqlDelete,
                      valstr($facturaID)
                    );
        return ejecutarNonQuery($sqlDelete);
      }
      return false;
    }
?>
