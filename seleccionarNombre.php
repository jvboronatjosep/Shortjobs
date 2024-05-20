<?php
require_once 'autoloader.php';
$confFile = "./conf.csv";
$gestion = new Empresas($confFile);
$userName = $_POST['userName'];



$gestion->getEmpresaByName($userName);
header('Location: perfilEmpresa.php');