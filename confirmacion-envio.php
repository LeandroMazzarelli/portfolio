<?php
    include_once("header.php");
    include_once ("PHPMailer/src/PHPMailer.php");
    include_once ("PHPMailer/src/SMTP.php");
    
    
    $titulo = "Gracias por contactarte";
    $pagina = "contacto";

    function guardarCorreo($correo){
        $archivo = fopen("mails.txt", "a+"); 
        fwrite($archivo, $correo . ";\n"); //En linux \r
        fclose($archivo);
    }    

    if($_POST["txtCorreo"]){
        guardarCorreo($_POST["txtCorreo"]);
    }
?>
<main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-4">
                    <h1>Gracias por contactarte</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Te responderé a la brevedad.</p>
                </div>
                <div class="col-12 col-sm-6">
                </div>
            </div>
        </div>
    </main>
</body>
</html>