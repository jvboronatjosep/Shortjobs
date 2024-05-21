<?php
require_once 'autoloader.php';

$confFile = "./conf.csv";
$gestion = new Empresas($confFile);
$trabajos = new Trabajos($confFile);

// Validar y sanitizar la entrada del usuario
$userName = isset($_POST['userName']) ? htmlspecialchars($_POST['userName']) : '';

// Obtener empresas y trabajos asociados al nombre de usuario
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
    <link rel="icon" href="img/LogoShortJobs.png" type="image/x-icon">
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
        <a class="navbar-brand" href="inicio.php"><img src="img/LogoShortJobs-removebg-preview.png" alt="ShortJobs Logo"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Trabajos.php">Mis Trabajos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Destacadas.php">Trabajadores Destacados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Contacto.php">Contacto</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="inicioSesionE.php" class="btn btn-light btn-lg me-3">Iniciar Sesión</a>
                <a href="Empresa-Usuario.php" class="btn btn-light btn-lg">Registro</a>
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

<footer class="pie-pagina bg-dark text-light py-4 mt-5">
    <div class="grupo-1 container">
        <div class="row">
            <div class="col-md-4">
                <a href="Inicio.php"><img src="img/LogoShortJobs-removebg-preview.png" alt="ShortJobs Logo" width="200px"></a>
            </div>
            <div class="col-md-4">
                <h2>Contacto:</h2>
                <p>Teléfono De Contacto: ☎️ 679 63 78 85</p>
            </div>
            <div class="col-md-4">
                <h2>Síguenos:</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/floridauniversitaria" class="fa fa-facebook" aria-label="Facebook"></a>
                    <a href="https://www.instagram.com/florida_uni/" class="fa fa-instagram" aria-label="Instagram"></a>
                    <a href="https://twitter.com/floridauni" class="fa fa-twitter" aria-label="Twitter"></a>
                    <a href="https://www.linkedin.com/school/florida-universitaria/?originalSubdomain=es" class="fa fa-linkedin" aria-label="LinkedIn"></a>
                    <a href="https://www.youtube.com/c/floridauniversitaria" class="fa fa-youtube" aria-label="YouTube"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="grupo-2 container text-center mt-3">
        <small>&copy; 2024 <b>ShortJobs</b> - Todos Los Derechos Reservados.</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>