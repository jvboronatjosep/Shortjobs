<?php
require_once 'autoloader.php';
$confFile = "./conf.csv";
$gestion = new Empresas($confFile);

// Verificar si la clave "userName" está presente en $_POST antes de acceder a ella
$userName = isset($_POST['userName']) ? $_POST['userName'] : null;

// Si la clave "userName" no está presente, $userName será null
// Puedes agregar una verificación adicional si es necesario, por ejemplo, redireccionar al usuario a otra página si no se proporciona el nombre de usuario
if ($userName === null) {
    // Redireccionar al usuario a otra página o mostrar un mensaje de error
    exit("El nombre de usuario no se ha proporcionado.");
}

$nameObtained = $gestion->getEmpresaByName($userName);
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
            <!-- Navbar Content -->
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <?php
                // Dibujar el nombre de la empresa
                $gestion->drawNombre($nameObtained);
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
            // Dibujar las empresas obtenidas
            $brandsObtained = $gestion->getEmpresas();
            $gestion->drawEmpresas($brandsObtained);
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
