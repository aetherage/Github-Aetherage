<?php
    //modelo de datos de productos
    require_once("libs/dao.php");

    function obtenerClientes(){
        $clientes = array();
        $sqlstr = "select * from clientes;";
        $clientes = obtenerRegistros($sqlstr);
        return $clientes;
    }
    
        function obtenerUsuario($userName){
        $usuario = array();
        $sqlstr = sprintf("SELECT *  FROM clientes where cli_user = '%s';",$userName);
        $usuario = obtenerUnRegistro($sqlstr);
        return $usuario;
    }
    
    
    function obtenerCliente($clienteID){
      $cliente = array();
      $sqlstr = "select * from clientes where cli_id = %d;";
      $sqlstr = sprintf($sqlstr, $clienteID);
      $cliente = obtenerUnRegistro($sqlstr);
      return $cliente;
    }
    
     function insertCliente($userName, $cliName, $userEmail, 
                           $password){
        $strsql = "INSERT INTO clientes
                    (cli_user, cli_nom, cli_email,
                    cli_psw,cli_est)
                   VALUES
                    ('%s', '%s','%s','%s','ACT');";
        $strsql = sprintf($strsql, valstr($userName),
                                    valstr($cliName),
                                    valstr($userEmail),
                                    $password);
        
        if(ejecutarNonQuery($strsql)){
            return getLastInserId();
        }
        return 0;
     }
    

    function actualizarCliente($cliente){
      if($cliente && is_array($cliente)){
        $sqlUpdate = "update clientes set ctgdsc='%s', ctgest='%s' where cli_id=%d;";
        $sqlUpdate = sprintf($sqlUpdate,
                      valstr($cliente["ctgdsc"]),
                      valstr($cliente["ctgest"]),
                      valstr($cliente["cli_id"])
                    );
        return ejecutarNonQuery($sqlUpdate);
      }
      return false;
    }

    function borrarCliente($clienteID){
      if($clienteID){
        $sqlDelete = "delete from clientes where cli_id=%d;";
        $sqlDelete = sprintf($sqlDelete,
                      valstr($clienteID)
                    );
        return ejecutarNonQuery($sqlDelete);
      }
      return false;
    }
?>
