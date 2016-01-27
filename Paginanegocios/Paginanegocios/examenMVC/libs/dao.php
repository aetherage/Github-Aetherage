<?php
   //data access object
   $server = "localhost";
   $user = "root";
   $pswd = "";
   $database = "empresa";
   $port = "3306";
   
   // ------------------------
   
   
   $conexion = new mysqli($server, $user, $pswd ,
                          $database, $port);
   
   if($conexion->connect_errno){
        //die();
        die($conexion->connect_error);
   }
  
   function obtenerRegistros($sqlstr){
        global $conexion;
        $result = $conexion->query($sqlstr);
        $resultArray = array();
        
        foreach($result as $registro){
            $resultArray[] = $registro;
        }

        return $resultArray;
   }
    
   
   
   function obtenerUnRegistro($sqlstr){
        global $conexion;
        $result = $conexion->query($sqlstr);
        $resultArray = array();     
        $resultArray[] = $result->fetch_assoc();
        return $resultArray;
   }
   
   
   function ejecutarNonQuery($sqlstr){
        global $conexion;
        $result = $conexion->query($sqlstr);
        return $conexion->affected_rows;
   }
   
   function valstr($str){
     global $conexion;
      return $conexion->escape_string($str);
   }
   
   function getLastInserId(){
     global $conexion;
     return $conexion->insert_id;
   }
?>