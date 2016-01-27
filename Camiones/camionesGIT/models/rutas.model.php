<?php
    //modelo de datos de productos
    require_once("libs/dao.php");

    function obtenerTiposRuta(){
        $tipo = array();
        $sqlstr = "select ru_des, ru_ini, ru_fin from rutas;";
        $tipo = obtenerRegistros($sqlstr);
        return $tipo;
    }
    
    
    function obtenerRutas(){
        $rutas = array();
        $sqlstr = "select * from rutas;";
        $rutas = obtenerRegistros($sqlstr);
        return $rutas;
    }
    function obtenerRuta($rutaID){
      $ruta = array();
      $sqlstr = "select * from rutas where ru_id = %d;";
      $sqlstr = sprintf($sqlstr, $rutaID);
      $ruta = obtenerUnRegistro($sqlstr);
      return $ruta;
    }
    
    function insertarRuta($ruta){
      if($ruta && is_array($ruta)){
         $sqlInsert = "INSERT INTO rutas(`ru_des`,`ru_ini`,`ru_fin`,`ru_lps`,`ru_est`)VALUES('%s','%s','%s','%d','%s');";
         $sqlInsert = sprintf($sqlInsert,
                        valstr($ruta["ru_des"]),
                        valstr($ruta["ru_ini"]),
                        valstr($ruta["ru_fin"]),
                        valstr($ruta["ru_lps"]),
                        valstr($ruta["ru_est"])
                      );
         if(ejecutarNonQuery($sqlInsert)){
           return getLastInserId();
         }
      }
      return false;
    }

    function actualizarRuta($ruta){
      if($ruta && is_array($ruta)){
        $sqlUpdate = "update rutas set ru_des='%s', ru_ini='%s', ru_fin='%s', ru_lps='%d', ru_est='%s' where ru_id=%d;";
        $sqlUpdate = sprintf($sqlUpdate,
                        valstr($ruta["ru_des"]),
                        valstr($ruta["ru_ini"]),
                        valstr($ruta["ru_fin"]),
                        valstr($ruta["ru_lps"]),
                        valstr($ruta["ru_est"]),
                        valstr($ruta["ru_id"])
                    );
        return ejecutarNonQuery($sqlUpdate);
      }
      return false;
    }

    function borrarRuta($rutaID){
      if($rutaID){
        $sqlDelete = "delete from rutas where ru_id=%d;";
        $sqlDelete = sprintf($sqlDelete,
                      valstr($rutaID)
                    );
        return ejecutarNonQuery($sqlDelete);
      }
      return false;
    }
?>
