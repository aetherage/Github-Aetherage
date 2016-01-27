<?php

  require_once("libs/template_engine.php");
  require_once("models/rutas.model.php");

  function run(){
    //htmlDatos, arreglo que contiene todas las substituciones
    // que se darán en la plantilla.

    $htmlDatos = array();
    $htmlDatos["rutaTitle"] = "";
    $htmlDatos["rutaMode"] = "";
    $htmlDatos["ru_id"] = "";
    $htmlDatos["ru_des"] = "";
    $htmlDatos["ru_ini"] = "";
    $htmlDatos["ru_fin"] = "";
    $htmlDatos["ru_lps"] = "";
    $htmlDatos["actSelected"]="selected";
    $htmlDatos["inaSelected"]="";
    $htmlDatos["desSelected"]="";
    $htmlDatos["disabled"]="";


    if(isset($_GET["acc"])){
      switch($_GET["acc"]){
        //Manejando si es un insert
        case "ins":
          $htmlDatos["rutaTitle"] = "Ingreso de Nueva ruta";
          $htmlDatos["rutaMode"] = "ins";
          //se determina si es una acción del formulario
          if(isset($_POST["btnacc"])){
            $lastID = insertarRuta($_POST);
            if($lastID){
              redirectWithMessage("¡ruta Ingresada!","index.php?page=ruta&acc=upd&ru_id=".$lastID);
            }else{
              //Se obtiene los datos que estaban en el post
                     
                        $htmlDatos["ru_id"] = $_POST["ru_id"];
                        $htmlDatos["ru_des"] = $_POST["ru_des"];
                        $htmlDatos["ru_ini"] = $_POST["ru_ini"];
                        $htmlDatos["ru_fin"] = $_POST["ru_fin"];
                        $htmlDatos["ru_lps"] = $_POST["ru_lps"];
                        $htmlDatos["actSelected"]=($_POST["ru_est"] =="ACT")?"selected":"";
                        $htmlDatos["inaSelected"]=($_POST["ru_est"] =="INA")?"selected":"";
                        $htmlDatos["desSelected"]=($_POST["ru_est"] =="DES")?"selected":"";

            }
          }
          //si no es una acción del post se muestra los datos
          renderizar("ruta", $htmlDatos);
          break;
        
        
        
        //Manejando si es un Update
        case "upd":
          if(isset($_POST["btnacc"])){
            //implementar logica de guardado
            if(actualizarRuta($_POST)){
              //forzando a que se actualice con los datos de la db
              redirectWithMessage("¡ruta Actualizada!","index.php?page=ruta&acc=upd&ru_id=".$_POST["ru_id"]);
            }
          }
          if(isset($_GET["ru_id"])){
            $ruta = obtenerRuta($_GET["ru_id"]);
            if($ruta){
              $htmlDatos["rutaTitle"] = "Actualizar ".$ruta["ru_des"];
              $htmlDatos["rutaMode"] = "upd";
              
              
                  $htmlDatos["ru_id"] = $ruta["ru_id"];
                  $htmlDatos["ru_des"] = $ruta["ru_des"];
                  $htmlDatos["ru_ini"] = $ruta["ru_ini"];
                  $htmlDatos["ru_fin"] = $ruta["ru_fin"];
                  $htmlDatos["ru_lps"] = $ruta["ru_lps"];
                  $htmlDatos["actSelected"]=($ruta["ru_est"] =="ACT")?"selected":"";
                  $htmlDatos["inaSelected"]=($ruta["ru_est"] =="INA")?"selected":"";
                  $htmlDatos["desSelected"]=($ruta["ru_est"] =="DES")?"selected":"";

              renderizar("ruta", $htmlDatos);
            }else{
              redirectWithMessage("¡ruta No Encontrada!","index.php?page=rutas");
            }
          }else{
            redirectWithMessage("¡ruta No Encontrada!","index.php?page=rutas");
          }
          break;
        //Manejando un delete
        case "dlt":
        if(isset($_POST["btnacc"])){
          //implementar logica de guardado
          if(borrarRuta($_POST["ru_id"])){
            //forzando a que se actualice con los datos de la db
            redirectWithMessage("¡ruta Borrada!","index.php?page=rutas");
          }
        }
          if(isset($_GET["ru_id"])){
            $ruta = obtenerRuta($_GET["ru_id"]);
            if($ruta){
              $htmlDatos["rutaTitle"] = "¿Desea borrar ".$ruta["ru_des"] . "?";
              $htmlDatos["rutaMode"] = "dlt";
                  $htmlDatos["ru_id"] = $ruta["ru_id"];
                  $htmlDatos["ru_des"] = $ruta["ru_des"];
                  $htmlDatos["ru_ini"] = $ruta["ru_ini"];
                  $htmlDatos["ru_fin"] = $ruta["ru_fin"];
                  $htmlDatos["ru_lps"] = $ruta["ru_lps"];
                  $htmlDatos["actSelected"]=($ruta["ru_est"] =="ACT")?"selected":"";
                  $htmlDatos["inaSelected"]=($ruta["ru_est"] =="INA")?"selected":"";
                  $htmlDatos["desSelected"]=($ruta["ru_est"] =="DES")?"selected":"";

              $htmlDatos["disabled"]='disabled="disabled"';
              renderizar("ruta", $htmlDatos);
            }else{
              redirectWithMessage("¡ruta No Encontrada!","index.php?page=rutas");
            }
          }else{
            redirectWithMessage("¡ruta No Encontrada!","index.php?page=rutas");
          }
          break;
        defualt:
          redirectWithMessage("¡Acción no permitida!","index.php?page=rutas");
          break;
      }
    }


  }

  run();
?>
