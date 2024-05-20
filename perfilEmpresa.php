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

<nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php"><img class="ml-4" style="height: 80px; width: 130px; margin-left: 50px;" src="img/LogoShortJobs-removebg-preview.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <div class="d-flex ms-auto">
                    <a href="Empresa-Usuario.php" class="btn btn-light btn-lg" style="margin-right: 15px;">Iniciar Sesión</a>
                    <a href="Empresa-Usuario.php" class="btn btn-light btn-lg" style="margin-right: 60px;">Registro</a>
                </div>
            </div>
        </div>
    </nav>

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
                <?php
                echo "<p>¡Bienvenido! </p>";
                ?>

            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center mb-4">
                <img src="img/LogoEmpresa.png" alt="Logo de la Empresa" class="img-fluid" style="max-height: 200px;">
            </div>
        </div>
        <div class="row"  >
            <?php
            
            $trabajos->drawTrabajos($trabajoObstained);
            ?>
        </div>
    

    <footer class="bg-dark text-light py-4">
        <div class="container">
            <!-- Footer Content -->
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
