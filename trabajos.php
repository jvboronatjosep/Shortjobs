<?php
require_once 'autoloader.php';
$confFile = "./conf.csv";
$gestion = new Trabajos($confFile);
$brandsObtained = $gestion->getTrabajos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajos - ShortJobs</title>
    <link rel="icon" href="img/logobarra.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c154837196.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style_inicio_empresa.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php"><img class="ml-4" style="height: 80px; width: 130px; margin-left: 40px;" src="img/LogoShortJobs-removebg-preview.png" alt="Logo"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white active" href="inicioTrabajador.php" style="margin-right: 15px;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Trabajos.php" style="margin-right: 15px;">Trabajos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Destacadas.php" style="margin-right: 15px;">Destacadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="ContactoU.php" style="margin-right: 30px;">Contacto</a>
                </li>
            </ul>
        </div>
        <div>
            <a href="perfilUsuario.php"><img src="img/fotoPerfil.png" class="profile-pic" width="40px" style="margin: 0 20 0 30;" alt="Perfil"></a>
        </div>
    </div>
</nav>
    
<div>
    <div class="img_principal">
        <img src="img/TrabajoEmpresa.jpg" class="d-block w-100" alt="Imagen principal">
    </div>
</div>

<div class="container-fluid mt-5">
    <h3 class="text-center">Trabajos Disponibles</h3>
    <div class="row mb-5">
        <?php
            $gestion->drawTrabajos($brandsObtained);
        ?>
    </div>
    <div class="d-flex justify-content-center my-4">
        <?php
            $gestion->showNavigation();
        ?>
    </div>
</div>

<div class="contacto">
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="Caja">
                <a href="Inicio.php"><img src="img/LogoShortJobs-removebg-preview.png" alt="Logo" width="200px"></a>
            </div>
            <div class="Caja">
                <div class="Medio">
                    <h2 id="contacto">Contacto:</h2>
                    <p>Telefono De Contacto:</p>
                    <p>☎️ 679 63 78 85</p>
                </div>
            </div>
            <div class="Caja">
                <h2>Síguenos:</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/floridauniversitaria" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/florida_uni/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/floridauni" class="fa fa-twitter"></a>
                    <a href="https://www.linkedin.com/school/florida-universitaria/?originalSubdomain=es" class="fa fa-linkedin"></a>
                    <a href="https://www.youtube.com/c/floridauniversitaria" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>ShortJobs</b> - Todos Los Derechos Reservados.</small>
        </div>
    </footer>
</div>
</body>
</html>
