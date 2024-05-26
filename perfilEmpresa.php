<?php
require_once 'autoloader.php';
$seguridad = new Security;
$seguridad->checkLoggedIn();


$confFile = "./conf.csv";

$gestion = new Empresas($confFile);

$trabajos = new Trabajos($confFile);

$userName = $_POST['empresaName'];


$brandsObtained = $gestion->getEmpresas();
$trabajoObstained = $trabajos->getTrabajosByEmpresa($userName);
$nombres = $gestion->getEmpresaByName($userName);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Empresa - ShortJobs</title>
    <link rel="icon" href="img/logobarra.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c154837196.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style_inicio_empresa.css">
    <style>
        .navbar-nav .nav-link {
            color: white;
        }
        .navbar-brand img {
            height: 80px;
            width: 130px;
            margin-left: 40px;
        }
        .btn-light {
            color: black;
        }
        .btn-light:hover {
            color: white;
            background-color: #343a40;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
    <div class="container-fluid">   
        <a class="navbar-brand" href="inicioEmpresa.php"><img src="img/LogoShortJobs-removebg-preview.png" alt="ShortJobs Logo"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="inicioEmpresa.php" style="margin-right: 15px;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="empresasDestacadas.php" style="margin-right: 15px;">Empresas Destacadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="ContactoU.php" style="margin-right: 15px;">Contacto</a>
                </li>
            </ul>
            <div>
                <a href="perfilEmpresa.php"><img src="img/fotoPerfil.png" class="profile-pic" width="40px" style="margin-right: 30px;"></a>
            </div>
        </div>
    </div>
</nav>
<br>
<br>
<br>

<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <?php
            if ($nombres) {
                $gestion->drawNombre($nombres);
            } else {
                echo "<p>No se encontraron empresas asociadas al usuario.</p>";
            }
            ?>
            <p>¡Bienvenido!</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center mb-4">
            <img src="img/pruebaLogoEmpresa.png" alt="Logo de la Empresa" class="img-fluid" style="max-height: 200px;">
        </div>
    </div>
    
    <a href="formularioCrearTrabajo.php" class="btn btn-primary mb-4">Publicar Oferta</a>

    <div class="row">
        <?php
        $trabajos->drawTrabajos($trabajoObstained);
        ?>
    </div>
</div>

<div class="contacto"><footer class="pie-pagina">
    <div class="grupo-1">
        <div class="Caja">
        <a href="Inicio.php"><img src="img/LogoShortJobs-removebg-preview.png" alt="" width="200px"></a>
        </div>
        <div class="Caja">
            <div class="Medio">
                <h2 id="contacto">Contacto:</h2>
                <p>Telefono De Contacto:</p>
                <p>☎️ 679 63 78 85</p>
            </div>
        </div>
        <div class="Caja">
            <h2>Siguenos:</h2>
            <div class="red-social">
                <a href="https://www.facebook.com/share/uYwJ7fS539XhHXbm/?mibextid=LQQJ4d" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/shortjobs?igsh=MW9qb2xweTd6ZzJzZw%3D%3D&utm_source=qr" class="fa fa-instagram"></a>
                <a href="https://x.com/shortjobs12?s=21&t=3ACYm1uHNjtFZz8zHOWisA" class="fa fa-twitter"></a>
                <a href="https://www.linkedin.com/in/shortjobs-13414630b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="fa fa-linkedin"></a>
                <a href="https://www.youtube.com/c/floridauniversitaria" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2024 <b>ShortJobs</b> - Todos Los Derechos Reservados.</small>
    </div>
</footer></div>
</html>