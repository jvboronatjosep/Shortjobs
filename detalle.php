<?php
require_once 'autoloader.php';
session_start();

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
    <title>Título del Documento</title>
</head>
<body>
    <h1>Detalle de la marca</h1>
    <hr>
    <h2><?php $gestion->drawDetalleSinCrud($brand);?></h2>
    <a href="perfilEmpresa.php"><button>Volver</button></a>
</body>
