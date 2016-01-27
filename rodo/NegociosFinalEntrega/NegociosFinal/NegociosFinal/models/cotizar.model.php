<?php
    //modelo de datos de productos
    require_once("libs/dao.php");
    
    function insertCotizacion($emprecoti, $contactocoti,$telcoti,$celcoti,
                           $correocoti, $producto, $canticoti, $especificacionescoti){
        $strsql = "INSERT INTO cotizacion
                    (fchcoti, emprecoti, contactocoti,
                    telcoti, celcoti, correocoti,
                    producto, canticoti,especificacionescoti)
                   VALUES
                    (now(), '%s','%s','%d','%d', '%s', '%s', '%s','%s');";
        $strsql = sprintf($strsql,valstr($emprecoti),
                                    valstr($contactocoti),
                                    valstr($telcoti),
                                    valstr($celcoti),
                                    valstr($correocoti),
                                    valstr($producto),
                                    valstr($canticoti),
                                    valstr($especificacionescoti));
        
        if(ejecutarNonQuery($strsql)){
            return getLastInserId();
        }
        return 0;
    }
    
?>