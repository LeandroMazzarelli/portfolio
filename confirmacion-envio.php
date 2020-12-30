<?php
    $titulo = "Contacto";
    $pagina = "contacto";

    include_once("header.php");
    include_once ("PHPMailer/src/PHPMailer.php");
    include_once ("PHPMailer/src/SMTP.php");
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