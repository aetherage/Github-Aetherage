<?php
    function valorVacio($valor){
        return (trim($valor) == "" && !esNumero($valor));
    }
    function esNumero($numero){
        return is_numeric($numero);
    }
?>