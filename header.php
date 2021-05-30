<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <title><?php echo $titulo ?></title>
</head>
<body id="<?php echo $pagina ?>">
    <div class="container">
        <nav class="navbar navbar-expand-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="my-2 nav-item">
                    <a class="nav-link px-3 <?php echo $pagina == "inicio"? "active" : "" ?>" href="index.php">Inicio</a>
                    </li>
                    <li class="my-2 nav-item">
                        <a class="nav-link px-3 <?php echo $pagina == "sobre-mi"? "active" : "" ?>" href="sobre-mi.php">Sobre mí</a>
                    </li>
                    <li class="my-2 nav-item">
                        <a class="nav-link px-3 <?php echo $pagina == "proyectos"? "active" : "" ?>" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="my-2 nav-item">
                        <a class="nav-link px-3 <?php echo $pagina == "contacto"? "active" : "" ?>" href="contacto.php">Contacto</a>
                    </li>
                </ul>
                <div class="btn-h btn-rojo">
                    <a href="http://">
                    Descarga mi CV
                    <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>