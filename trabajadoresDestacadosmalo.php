<?php
require_once 'autoloader.php';

$confFile = "./conf.csv";
$gestion = new Empresas($confFile);
$trabajos = new Trabajos($confFile);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShortJobs</title>
    <link rel="icon" href="img/LogoShortJobs-removebg-preview.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c154837196.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style_trabajos.css">
    <style>
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php"><img class="ml-4" style="height: 80px; width: 130px margin-left: 40px;" src="img/LogoShortJobs-removebg-preview.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="inicio.php" style="margin-right: 15px;">Inicio </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="Trabajos.php" style="margin-right: 15px;">Trabajos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Calendario.php" style="margin-right: 15px;">Calendario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Destacadas.php" style="margin-right: 15px;">Destacadas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="Contacto.php" style="margin-right: 30px;">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    


<div id="hero-text" style="height: 600px; background-color: black; display: flex; align-items: center; justify-content: center;">
    <h2 style="text-align: center; color: white; font-size: 50px">Desbloquea tu potencial laboral con ShortJobs:<br>Encuentra, conecta, ¡y empieza a trabajar!</h2>
</div>


<div>
    <?php
        $trabajos = new Trabajos($confFile);
        $trabajos->trabajadorestop();
    ?>
</div>




</body>

<footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row text-center text-md-left">
            <div class="col-md-4 mb-4 mb-md-0">
                <a href="Inicio.php">
                    <img src="img/LogoShortJobs-removebg-preview.png" alt="ShortJobs Logo" width="150">
                </a>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Contacto</h5>
                <p>Teléfono: 679 63 78 85</p>
            </div>
            <div class="col-md-4">
                <h5>Síguenos</h5>
                <div class="d-flex justify-content-center justify-content-md-center">
                    <a href="https://www.facebook.com/floridauniversitaria" class="text-light mx-2" aria-label="Facebook">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/florida_uni/" class="text-light mx-2" aria-label="Instagram">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://twitter.com/floridauni" class="text-light mx-2" aria-label="Twitter">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com/school/florida-universitaria/?originalSubdomain=es" class="text-light mx-2" aria-label="LinkedIn">
                        <i class="fab fa-linkedin fa-lg"></i>
                    </a>
                    <a href="https://www.youtube.com/c/floridauniversitaria" class="text-light mx-2" aria-label="YouTube">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <small>&copy; 2024 <b>ShortJobs</b> - Todos Los Derechos Reservados.</small>
            </div>
        </div>
    </div>
</footer>
</html>