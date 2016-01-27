<?php
    
    require_once("libs/dao.php");
    
    function insertRegistro($nombre, $email , $asunto , $mensaje){
        $strsql = "INSERT INTO contactar (nombre , email,asunto , mensaje )
                                    VALUES                       
                                    ('%s','%s','%s','%s');";
                                    
        $strsql = sprintf($strsql,$nombre, $email, $asunto ,$mensaje);
         
      
        if(ejecutarNonQuery($strsql)){
            return getLastInserId();
        }
        return 0;
    }
    
?>