<?php
require_once 'autoloader.php';
session_start();
$confFile = "./conf.csv";
$id=$_GET["id"];
$borrador = new Trabajos($confFile);
$borrador->borrarUnTrabajo($id);
header('Location: ./trabajos.php');



?>