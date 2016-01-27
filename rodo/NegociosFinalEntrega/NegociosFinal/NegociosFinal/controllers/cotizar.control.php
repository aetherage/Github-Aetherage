<?php
/* Registro Controller
 * 2014-12-10 
 * Created By KJEL
 * Last Modification 2014-12-10 16:20
 */
  require_once("libs/template_engine.php");
  require_once("models/cotizar.model.php");
  require_once("libs/cotizar.php");

  function run(){
    $htmlData = array();
    $htmlData["txtEmpresa"] = "";
    $htmlData["txtContacto"]="";
    $htmlData["txtTel"] = "";
    $htmlData["txtCel"] = "";
    $htmlData["txtCorreo"] = "";
    $htmlData["txtProduc"] = "";
    $htmlData["txtCanti"] = "";
    $htmlData["txtEspecif"] = "";
    
    if(isset($_POST["btnEnviar"])){
      $htmlData["txtEmpresa"] = $_POST["txtEmpresa"];
      $htmlData["txtContacto"] =  $_POST["txtContacto"];
      $htmlData["txtTel"] = $_POST["txtTel"];
      $htmlData["txtCel"] = $_POST["txtCel"];
      $htmlData["txtCorreo"] = $_POST["txtCorreo"];
      $htmlData["txtProduc"] = $_POST["txtProduc"];
      $htmlData["txtCanti"] = $_POST["txtCanti"];
      $htmlData["txtEspecif"] = $_POST["txtEspecif"];
      $Empresa = $htmlData["txtEmpresa"];
      $Contacto =  $htmlData["txtContacto"];
      $Tel = $htmlData["txtTel"];
      $Cel = $htmlData["txtCel"];
      $Correo = $htmlData["txtCorreo"];
      $Produc = $htmlData["txtProduc"];
      $Canti = $htmlData["txtCanti"];
      $Especif = $htmlData["txtEspecif"];
      if((!valorVacio($htmlData["txtContacto"])) && (!valorVacio($htmlData["txtCel"])) && (!valorVacio($htmlData["txtCorreo"]))){
            if((esNumero($htmlData["txtTel"]) && esNumero($htmlData["txtCel"])) || (esNumero($htmlData["txtTel"]) || esNumero($htmlData["txtCel"]))){

                    if ($htmlData["txtCel"]=='' || $htmlData["txtCorreo"]=='' || $htmlData["txtContacto"] =='' ){
                    
                    echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";
                    
                    }else{
                    
                    
                        require("archivosformulario/class.phpmailer.php");
                        $mail = new PHPMailer();
                    
                        $mail->From     = $htmlData["txtCorreo"];
                        $mail->FromName = $htmlData["txtContacto"];
                        $mail->AddAddress("kenmyjel.clnea@gmail.com"); // Dirección a la que llegaran los mensajes.
                       
                    // Aquí van los datos que apareceran en el correo que reciba
                        //adjuntamos un archivo 
                            //adjuntamos un archivo
                                
                        $mail->WordWrap = 50; 
                        $mail->IsHTML(true);     
                        $mail->Subject  =  "Contacto";
                        $mail->Body     =  "Empresa : $Empresa \n<br \>".
                        "contacto : $Contacto \n<br \>".
                        "telefono : $Tel \n<br \>".
                        "celular : $Cel \n<br \>".
                        "correo : $Correo \n<br \>".
                        "producto : $Produc \n<br \>".
                        "cantidad : $Canti \n<br \>".
                        "especificacion : $Especif  \n<br \>";
                    
                        
                      insertCotizacion($htmlData["txtEmpresa"],
                                    $htmlData["txtContacto"],
                                    $htmlData["txtTel"],
                                    $htmlData["txtCel"],
                                    $htmlData["txtCorreo"],
                                    $htmlData["txtProduc"],
                                    $htmlData["txtCanti"],
                                    $htmlData["txtEspecif"]);  
                        
                    
                    // Datos del servidor SMTP
                    
                        $mail->IsSMTP(); 
                        $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
                        $mail->SMTPAuth = true; 
                        $mail->Username = "kenmyjel.clnea@gmail.com";  // Correo Electrónico
                        $mail->Password = "holaclnea123"; // Contraseña
                        
                        if ($mail->Send())
                        echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='index.php?page=productos';</script>";
                        else
                        echo "<script>alert('Error al enviar el formulario');location.href ='index.php?page=productos';</script>";
                    
                    }


            }
      }
               
    }
    renderizar("cotizar",$htmlData);
  }

  run();
?>


