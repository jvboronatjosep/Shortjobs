<?php
require_once 'autoloader.php';
$confFile = "conf.csv";
$gestion = new Trabajos($confFile);

$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$empresa = $_POST['empresa'];
$descripcion = $_POST['descripcion'];
$ubicacion = $_POST['ubicacion'];
$fecha = $_POST['fecha'];
$salario = $_POST['salario'];
$duracion = $_POST['duracion'];

$gestion->createTrabajo($nombre, $tipo, $empresa, $descripcion, $ubicacion, $fecha, $salario, $duracion);
header('Location: perfilEmpresa.php');
?>
