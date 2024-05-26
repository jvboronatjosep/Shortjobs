<?php
require_once 'autoloader.php';
$seguridad = new Security;
$seguridad->checkLoggedIn();


$confFile = "./conf.csv";
$gestion = new Trabajos($confFile);
$id=$_GET["id"];
$brand = $gestion->getTrabajoById($id);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="text-center">Detalle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c154837196.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
        <h1 class="text-center mb-4">Detalle del Trabajo</h1>
        <?php $gestion->drawDetalleSinCrud($brand); ?>
        <div class="text-center mt-4">
            <a href="trabajos.php" class="btn btn-primary">Volver</a>
        </div>
    </div>
</body>
</html>
