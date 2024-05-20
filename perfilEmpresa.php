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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
        <div class="container-fluid">
            <!-- Navbar content -->
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
            $trabajos->drawTrabajos($trabajoObstained);
            ?>
        </div>
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
