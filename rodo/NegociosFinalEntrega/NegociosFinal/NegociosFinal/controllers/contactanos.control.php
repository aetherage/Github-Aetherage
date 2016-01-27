<?php
/* Home Controller
 * 2014-10-14 
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
   require_once("models/contactanos.model.php");
  require_once("libs/template_engine.php");
  function run(){
    

     
    if(isset($_POST["btnenviar"])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        
        if ($nombre=='' || $email=='' || $asunto =='' ){
                    
                    echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";
                    
                    }else{
                    
                    
                        require("archivosformulario/class.phpmailer.php");
                        $mail = new PHPMailer();
                    
                        $mail->From     = $email;
                        $mail->FromName = $nombre;
                        $mail->AddAddress("kenmyjel.clnea@gmail.com"); // Dirección a la que llegaran los mensajes.
                       
                    // Aquí van los datos que apareceran en el correo que reciba
                        //adjuntamos un archivo 
                            //adjuntamos un archivo
                                
                        $mail->WordWrap = 50; 
                        $mail->IsHTML(true);     
                        $mail->Subject  =  "Contacto";
                        $mail->Body     =  "Nombre : $nombre \n<br \>".
                        "Correo : $email \n<br \>".
                        "Asunto : $asunto \n<br \>".
                        "Mensaje : $mensaje \n<br \>";
                     
                        
                    
                    // Datos del servidor SMTP
                    
                        $mail->IsSMTP(); 
                        $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
                        $mail->SMTPAuth = true; 
                        $mail->Username = "kenmyjel.clnea@gmail.com";  // Correo Electrónico
                        $mail->Password = "holaclnea123"; // Contraseña
                        
                        if ($mail->Send())
                        echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='index.php?page=contactanos';</script>";
                        else
                        echo "<script>alert('Error al enviar el formulario');location.href ='index.php?page=productos';</script>";
                    
                    
              insertRegistro($nombre ,$email, $asunto, $mensaje);
              }
     
    
    }
    renderizar("contactanos",array());
    }
    
  run();
?>