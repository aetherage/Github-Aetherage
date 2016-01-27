<?php
    //modelo de datos de productos
    require_once("libs/dao.php");

    function obtenerCamiones(){
        $camiones = array();
        $sqlstr = "select * from camiones;";
        $camiones = obtenerRegistros($sqlstr);
        return $camiones;
    }
    function obtenerCamion($camionID){
      $camion = array();
      $sqlstr = "select * from camiones where cam_id = %d;";
      $sqlstr = sprintf($sqlstr, $camionID);
      $camion = obtenerUnRegistro($sqlstr);
      return $camion;
    }
    
    
    
    
    function insertarCamion($camion){
      if($camion && is_array($camion)){
         $sqlInsert = "INSERT INTO camiones(`cam_placa`,`cam_des`,`cam_tipo`,`cam_lps`,`cam_max`,`cam_est`)VALUES('%s','%s','%s','%d','%d','%s');";
         $sqlInsert = sprintf($sqlInsert,
                        valstr($camion["cam_placa"]),
                        valstr($camion["cam_des"]),
                        valstr($camion["cam_tipo"]),
                        valstr($camion["cam_lps"]),
                        valstr($camion["cam_max"]),
                        valstr($camion["cam_est"])
                      );
         if(ejecutarNonQuery($sqlInsert)){
           return getLastInserId();
         }
      }
      return false;
    }

    function actualizarCamion($camion){
      if($camion && is_array($camion)){
        $sqlUpdate = "update camiones set cam_placa='%s', cam_des='%s', cam_tipo='%s', cam_lps='%d', cam_max='%d', cam_est='%s' where cam_id=%d;";
        $sqlUpdate = sprintf($sqlUpdate,
                        valstr($camion["cam_placa"]),
                        valstr($camion["cam_des"]),
                        valstr($camion["cam_tipo"]),
                        valstr($camion["cam_lps"]),
                        valstr($camion["cam_max"]),
                        valstr($camion["cam_est"]),
                        valstr($camion["cam_id"])
                    );
        return ejecutarNonQuery($sqlUpdate);
      }
      return false;
    }

    function borrarCamion($camionID){
      if($camionID){
        $sqlDelete = "delete from camiones where cam_id=%d;";
        $sqlDelete = sprintf($sqlDelete,
                      valstr($camionID)
                    );
        return ejecutarNonQuery($sqlDelete);
      }
      return false;
    }
?>
