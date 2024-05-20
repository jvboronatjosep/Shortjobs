<?php
require_once 'autoloader.php';
$confFile = "./conf.csv";
$gestion = new Empresas ($confFile);
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
</head>
<body>
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
