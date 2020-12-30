<?php
    $titulo = "Contacto";
    $pagina = "contacto";

    include_once("header.php");
    include_once ("PHPMailer/src/PHPMailer.php");
    include_once ("PHPMailer/src/SMTP.php");

    //A continuación el código fuente del formulario para el envío de correo electrónico en PHP:

    if($_POST){ /* es postback */
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $mensaje = $_POST["txtMensaje"];
    
        if($nombre != "" && $correo != ""){
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = "mail.dominio.com"; // SMTP a utilizar
            $mail->Username = "info@dominio.com.ar"; // Correo completo a utilizar
            $mail->Password = "aqui va la clave de tu correo";
            $mail->Port = 25;
            $mail->From = "info@dominio.com.ar"; //Desde la cuenta donde enviamos
            $mail->FromName = "Tu nombre a mostrar";
            $mail->IsHTML(true);
            $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
    
            //Destinatarios
            $mail->addAddress($correo);
            $mail->addBCC("otrocorreo@gmail.com"); //Copia oculta
            $mail->Subject = utf8_decode("Contacto página Web");
            $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
            if(!$mail->Send()){
                $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
            }
            $mail->ClearAllRecipients(); //Borra los destinatarios
    
            //Envía ahora un correo a nosotros con los datos de la persona
            $mail->addAddress("info@dominio.com.ar");
            $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
            $mail->Body = "Te escribio $nombre cuyo correo es $correo y el siguiente mensaje:<br><br>$mensaje";
            
            if($mail->Send()){ /* Si fue enviado correctamente redirecciona */
                header('Location: confirmacion-envio.php');
            } else {
                $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
            }    
        } else {
            $msg = "Complete todos los campos";
        }
    
    }
?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-4">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nihil ratione numquam laudantium, dolorum corporis quas possimus, ea voluptas commodi porro nesciunt officia excepturi officiis. Quod delectus distinctio cumque cupiditate.</p>
                </div>
                <div class="col-12 col-sm-6">
                    <form class="form-group" action="" method="post">
                        <div>
                            <input class="form-control mb-3 shadow" id="txtNombre" name="txtNombre" type="text" placeholder="Nombre">
                        </div>
                        <div>
                            <input class="form-control mb-3 shadow" id="txtCorreo" name="txtCorreo" type="email" placeholder="Correo">
                        </div>
                        <div>
                            <textarea class="form-control mb-3 shadow" id="txtMensaje" name="txtMensaje"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit"class="btn">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-sm-3">
                    <i class="fab fa-github"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
                <div class="col-12 col-sm-3 sponsor">
                    <span class="text-light sponsor">Sponsor</span> <a href="https://depcsuite.com/" target="_blank">DePC Suite</a>
                </div>
                <div class="col-12 col-sm-3">
                    <a href="#">leandromazza19@gmail.com</a>
                </div>
                <div class="col-12 col-sm-3 caja">
                    <a href="http://">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>