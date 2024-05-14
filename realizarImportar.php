<?php

require_once 'autoloader.php'; 

$confFile = "./conf.csv";
$importEmpresa = "empresas.csv";
$importador = new Importar ($confFile); 
$importador->importarEmpresa($importEmpresa);
header('Location: ./Inicio.php');
