<?php
    //modelo de datos de productos
    require_once("libs/dao.php");

    function obtenerEmpleados(){
        $empleados = array();
        $sqlstr = "select * from empleados;";
        $empleados = obtenerRegistros($sqlstr);
        return $empleados;
    }
    function obtenerEmpleado($empleadoID){
      $empleado = array();
      $sqlstr = "select * from empleados where emp_id = %d;";
      $sqlstr = sprintf($sqlstr, $empleadoID);
      $empleado = obtenerUnRegistro($sqlstr);
      return $empleado;
    }
    
    
    function insertarEmpleado($empleado){
      if($empleado && is_array($empleado)){
         $sqlInsert = "INSERT INTO empleados(`emp_placa`,`emp_des`,`emp_tipo`,`emp_lps`,`emp_max`,`emp_est`)VALUES('%s','%s','%s','%d','%d','%s');";
         $sqlInsert = sprintf($sqlInsert,
                        valstr($empleado["emp_placa"]),
                        valstr($empleado["emp_des"]),
                        valstr($empleado["emp_tipo"]),
                        valstr($empleado["emp_lps"]),
                        valstr($empleado["emp_max"]),
                        valstr($empleado["emp_est"])
                      );
         if(ejecutarNonQuery($sqlInsert)){
           return getLastInserId();
         }
      }
      return false;
    }

    function actualizarEmpleado($empleado){
      if($empleado && is_array($empleado)){
        $sqlUpdate = "update empleados set emp_placa='%s', emp_des='%s', emp_tipo='%s', emp_lps='%d', emp_max='%d', emp_est='%s' where emp_id=%d;";
        $sqlUpdate = sprintf($sqlUpdate,
                        valstr($empleado["emp_placa"]),
                        valstr($empleado["emp_des"]),
                        valstr($empleado["emp_tipo"]),
                        valstr($empleado["emp_lps"]),
                        valstr($empleado["emp_max"]),
                        valstr($empleado["emp_est"]),
                        valstr($empleado["emp_id"])
                    );
        return ejecutarNonQuery($sqlUpdate);
      }
      return false;
    }

    function borrarEmpleado($empleadoID){
      if($empleadoID){
        $sqlDelete = "delete from empleados where emp_id=%d;";
        $sqlDelete = sprintf($sqlDelete,
                      valstr($empleadoID)
                    );
        return ejecutarNonQuery($sqlDelete);
      }
      return false;
    }
?>
