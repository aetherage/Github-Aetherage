<?php

  require_once("libs/template_engine.php");
  require_once("models/camiones.model.php");
  require_once("models/rutas.model.php");

  function run(){
    //htmlDatos, arreglo que contiene todas las substituciones
    // que se darán en la plantilla.

    $htmlDatos = array();
    $htmlDatos["comprasTitle"] = "";
    $htmlDatos["comprasMode"] = "";
    $htmlDatos["rabSelected"] = "selected";
    $htmlDatos["torSelected"] = "";
    $htmlDatos["ccSelected"] = "";
    $htmlDatos["dsSelected"] = "";
    $htmlDatos["crSelected"] = "";
    $htmlDatos["plaSelected"] = "";
    $htmlDatos["atpSelected"] = "";
    $htmlDatos["atgSelected"] = "";
    $htmlDatos["jgrSelected"] = "";
    $htmlDatos["jgaSelected"] = "";
    $htmlDatos["jcoSelected"] = "";
    $htmlDatos["lbSelected"] = "";
    $htmlDatos["tolSelected"] = "";
    $htmlDatos["mpvSelected"] = "";
    $htmlDatos["cam_lps"] = "";
    $htmlDatos["ru_lps"] = "";
    $htmlDatos["actSelected"]="selected";
    $htmlDatos["inaSelected"]="";
    $htmlDatos["desSelected"]="";
    $htmlDatos["disabled"]="";

    if(isset($_GET["acc"])){
      switch($_GET["acc"]){
        //Manejando si es un insert
        case "ins":
          $htmlDatos["camionTitle"] = "Ingreso de Nueva camion";
          $htmlDatos["camionMode"] = "ins";
          //se determina si es una acción del formulario
          if(isset($_POST["btnacc"])){
            $lastID = insertarCamion($_POST);
            if($lastID){
              redirectWithMessage("¡camion Ingresada!","index.php?page=camion&acc=upd&cam_id=".$lastID);
            }else{
              //Se obtiene los datos que estaban en el post
                     
                        $htmlDatos["cam_id"] = $_POST["cam_id"];
                        $htmlDatos["cam_placa"] = $_POST["cam_placa"];
                        $htmlDatos["cam_des"] = $_POST["cam_des"];
                        $htmlDatos["rabSelected"] = ($_POST["cam_tipo"] =="RAB")?"selected":"";
                        $htmlDatos["torSelected"] = ($_POST["cam_tipo"] =="TOR")?"selected":"";
                        $htmlDatos["ccSelected"] = ($_POST["cam_tipo"] =="CC")?"selected":"";
                        $htmlDatos["dsSelected"] = ($_POST["cam_tipo"] =="DS")?"selected":"";
                        $htmlDatos["crSelected"] = ($_POST["cam_tipo"] =="CR")?"selected":"";
                        $htmlDatos["plaSelected"] = ($_POST["cam_tipo"] =="PLA")?"selected":"";
                        $htmlDatos["atpSelected"] = ($_POST["cam_tipo"] =="ATP")?"selected":"";
                        $htmlDatos["atgSelected"] = ($_POST["cam_tipo"] =="ATG")?"selected":"";
                        $htmlDatos["jgrSelected"] = ($_POST["cam_tipo"] =="JGR")?"selected":"";
                        $htmlDatos["jgaSelected"] = ($_POST["cam_tipo"] =="JGA")?"selected":"";
                        $htmlDatos["jcoSelected"] = ($_POST["cam_tipo"] =="JCO")?"selected":"";
                        $htmlDatos["lbSelected"] = ($_POST["cam_tipo"] =="LB")?"selected":"";
                        $htmlDatos["tolSelected"] = ($_POST["cam_tipo"] =="TOL")?"selected":"";
                        $htmlDatos["mpvSelected"] = ($_POST["cam_tipo"] =="MPV")?"selected":"";
                        $htmlDatos["cam_lps"] = $_POST["cam_lps"];
                        $htmlDatos["cam_max"] = $_POST["cam_max"];
                        $htmlDatos["actSelected"]=($_POST["cam_est"] =="ACT")?"selected":"";
                        $htmlDatos["inaSelected"]=($_POST["cam_est"] =="INA")?"selected":"";
                        $htmlDatos["desSelected"]=($_POST["cam_est"] =="DES")?"selected":"";

            }
          }
          //si no es una acción del post se muestra los datos
          renderizar("camion", $htmlDatos);
          break;
        
        
        
        //Manejando si es un Update
        case "upd":
          if(isset($_POST["btnacc"])){
            //implementar logica de guardado
            if(actualizarCamion($_POST)){
              //forzando a que se actualice con los datos de la db
              redirectWithMessage("¡camion Actualizada!","index.php?page=camion&acc=upd&cam_id=".$_POST["cam_id"]);
            }
          }
          if(isset($_GET["cam_id"])){
            $camion = obtenerCamion($_GET["cam_id"]);
            if($camion){
              $htmlDatos["camionTitle"] = "Actualizar ".$camion["cam_des"];
              $htmlDatos["camionMode"] = "upd";
              
              
                  $htmlDatos["cam_id"] = $camion["cam_id"];
                  $htmlDatos["cam_placa"] = $camion["cam_placa"];
                  $htmlDatos["cam_des"] = $camion["cam_des"];
                  $htmlDatos["rabSelected"] = ($camion["cam_tipo"] =="RAB")?"selected":"";
                  $htmlDatos["torSelected"] = ($camion["cam_tipo"] =="TOR")?"selected":"";
                  $htmlDatos["ccSelected"] = ($camion["cam_tipo"] =="CC")?"selected":"";
                  $htmlDatos["dsSelected"] = ($camion["cam_tipo"] =="DS")?"selected":"";
                  $htmlDatos["crSelected"] = ($camion["cam_tipo"] =="CR")?"selected":"";
                  $htmlDatos["plaSelected"] =($camion["cam_tipo"] =="PLA")?"selected":"";
                  $htmlDatos["atpSelected"] = ($camion["cam_tipo"] =="ATP")?"selected":"";
                  $htmlDatos["atgSelected"] = ($camion["cam_tipo"] =="ATG")?"selected":"";
                  $htmlDatos["jgrSelected"] = ($camion["cam_tipo"] =="JGR")?"selected":"";
                  $htmlDatos["jgaSelected"] = ($camion["cam_tipo"] =="JGA")?"selected":"";
                  $htmlDatos["jcoSelected"] = ($camion["cam_tipo"] =="JCO")?"selected":"";
                  $htmlDatos["lbSelected"] = ($camion["cam_tipo"] =="LB")?"selected":"";
                  $htmlDatos["tolSelected"] = ($camion["cam_tipo"] =="TOL")?"selected":"";
                  $htmlDatos["mpvSelected"] = ($camion["cam_tipo"] =="MPV")?"selected":"";
                  $htmlDatos["cam_lps"] = $camion["cam_lps"];
                  $htmlDatos["cam_max"] = $camion["cam_max"];
                  $htmlDatos["actSelected"]=($camion["cam_est"] =="ACT")?"selected":"";
                  $htmlDatos["inaSelected"]=($camion["cam_est"] =="INA")?"selected":"";
                  $htmlDatos["desSelected"]=($camion["cam_est"] =="DES")?"selected":"";

              renderizar("camion", $htmlDatos);
            }else{
              redirectWithMessage("¡camion No Encontrada!","index.php?page=camiones");
            }
          }else{
            redirectWithMessage("¡camion No Encontrada!","index.php?page=camiones");
          }
          break;
        //Manejando un delete
        case "dlt":
        if(isset($_POST["btnacc"])){
          //implementar logica de guardado
          if(borrarCamion($_POST["cam_id"])){
            //forzando a que se actualice con los datos de la db
            redirectWithMessage("¡camion Borrada!","index.php?page=camiones");
          }
        }
          if(isset($_GET["cam_id"])){
            $camion = obtenerCamion($_GET["cam_id"]);
            if($camion){
              $htmlDatos["camionTitle"] = "¿Desea borrar ".$camion["cam_des"] . "?";
              $htmlDatos["camionMode"] = "dlt";
                  $htmlDatos["cam_id"] = $camion["cam_id"];
                  $htmlDatos["cam_placa"] = $camion["cam_placa"];
                  $htmlDatos["cam_des"] = $camion["cam_des"];
                  $htmlDatos["rabSelected"] = ($camion["cam_tipo"] =="RAB")?"selected":"";
                  $htmlDatos["torSelected"] = ($camion["cam_tipo"] =="TOR")?"selected":"";
                  $htmlDatos["ccSelected"] = ($camion["cam_tipo"] =="CC")?"selected":"";
                  $htmlDatos["dsSelected"] = ($camion["cam_tipo"] =="DS")?"selected":"";
                  $htmlDatos["crSelected"] = ($camion["cam_tipo"] =="CR")?"selected":"";
                  $htmlDatos["plaSelected"] =($camion["cam_tipo"] =="PLA")?"selected":"";
                  $htmlDatos["atpSelected"] = ($camion["cam_tipo"] =="ATP")?"selected":"";
                  $htmlDatos["atgSelected"] = ($camion["cam_tipo"] =="ATG")?"selected":"";
                  $htmlDatos["jgrSelected"] = ($camion["cam_tipo"] =="JGR")?"selected":"";
                  $htmlDatos["jgaSelected"] = ($camion["cam_tipo"] =="JGA")?"selected":"";
                  $htmlDatos["jcoSelected"] = ($camion["cam_tipo"] =="JCO")?"selected":"";
                  $htmlDatos["lbSelected"] = ($camion["cam_tipo"] =="LB")?"selected":"";
                  $htmlDatos["tolSelected"] = ($camion["cam_tipo"] =="TOL")?"selected":"";
                  $htmlDatos["mpvSelected"] = ($camion["cam_tipo"] =="MPV")?"selected":"";
                  $htmlDatos["cam_lps"] = $camion["cam_lps"];
                  $htmlDatos["cam_max"] = $camion["cam_max"];
                  $htmlDatos["actSelected"]=($camion["cam_est"] =="ACT")?"selected":"";
                  $htmlDatos["inaSelected"]=($camion["cam_est"] =="INA")?"selected":"";
                  $htmlDatos["desSelected"]=($camion["cam_est"] =="DES")?"selected":"";

              $htmlDatos["disabled"]='disabled="disabled"';
              renderizar("camion", $htmlDatos);
            }else{
              redirectWithMessage("¡camion No Encontrada!","index.php?page=camiones");
            }
          }else{
            redirectWithMessage("¡camion No Encontrada!","index.php?page=camiones");
          }
          break;
        defualt:
          redirectWithMessage("¡Acción no permitida!","index.php?page=camiones");
          break;
      }
    }


  }

  run();
?>
