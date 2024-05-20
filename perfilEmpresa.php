<?php
require_once 'autoloader.php';
$confFile = "./conf.csv";
$gestion = new Empresas($confFile);
$brandsObtained = $gestion->getEmpresas();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Empresa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-dark .navbar-nav .nav-link {
            color: white;
        }
        .navbar-dark .navbar-brand img {
            filter: brightness(0) invert(1);
        }
        .header-buttons .btn-light {
            color: black;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php"><img class="ml-4" style="height: 80px; width: 130px; margin-left: 40px;" src="img/LogoShortJobs-removebg-preview.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="inicio.php" style="margin-right: 15px;">Gestionar Mi Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Trabajos.php" style="margin-right: 15px;">Mis Trabajadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Calendario.php" style="margin-right: 15px;">Calendario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Destacadas.php" style="margin-right: 15px;">Destacadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contacto.php" style="margin-right: 30px;">Contacto</a>
                </li>
            </ul>
            <iv class="header-buttons">
                <a href="Empresa-Usuario.php" class="btn btn-light btn-lg btn-block" style="margin-right: 5px;">Iniciar Sesión</a>
                <a href="formularioCrearTrabajo.php" class="btn btn-light btn-lg btn-block">Publicar Oferta </a>
               
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1>Perfil de Empresas</h1>
            <p>Aquí puedes ver y gestionar los perfiles de las empresas registradas en nuestra plataforma.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center mb-4">
            <img src="img/LogoEmpresa.png" alt="Logo de la Empresa" class="img-fluid" style="max-height: 200px;">
        </div>
    </div>
    <div class="row">
        <?php
            $gestion->drawEmpresas($brandsObtained);
        ?>
    </div>
</div>

<footer class="bg-dark text-white py-3">
    <div class="container">
        <p class="mb-0">Derechos de autor © 2024 Nombre de la Empresa</p>
    </div>
</footer>

<!-- Bootstrap JS (opcional, dependiendo de tu necesidad de funcionalidades de Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
