<?php
    $global_context = array();
    
    function addToContext($key,$value){
        global $global_context;
        $global_context[$key] = $value;
    }
    
    function verificar_email($email){
        if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email)){
            return true;
        }
        return false;
        }
        
    function verificar_Texto($texto){
        if(preg_match("/^[a-zA-Z0-9]{8,40}$/",$texto)){
            return true;
        }
        return false;
        }
    function verificar_Texto2($texto){
        if(preg_match("/^[a-zA-Z0-9]{2,40}$/",$texto)){
            return true;
        }
        return false;
        }
        
    function verificar_Numero($texto){
        if(preg_match("/^\d+$/",$texto)){
            return true;
        }
        return false;
        }
    
?>