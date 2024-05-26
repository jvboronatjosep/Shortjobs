<?php
require_once 'autoloader.php';
$seguridad = new Security;
$seguridad->checkLoggedIn();

$confFile = "./conf.csv";
$gestion = new Trabajos($confFile);
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];
$empresa = $_POST['empresa'];
$ubicacion = $_POST['ubicacion'];
$fecha = $_POST['fecha'];
$duracion = $_POST['duracion'];
$gestion->editarTrabajo($id, $nombre, $descripcion, $tipo, $empresa, $ubicacion, $fecha, $duracion);
header('Location: inicioSesionPerfilEmpresa.php');

?>