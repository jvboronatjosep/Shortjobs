<?php
require_once 'autoloader.php';
$confFile = "./conf.csv";
$id=$_GET["id"];
$borrador = new Trabajos($confFile);
$borrador->borrarUnTrabajo($id);
header('Location: ./inicioSesionPerfilEmpresa.php');



?>