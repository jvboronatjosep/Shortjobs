<?php

require_once 'autoload.php'; 

$confFile = "./conf.csv";
$importSerie = "empresas.csv";
$importador = new Importar($confFile); 
$importador->importarEmpresa($importSerie);
header('Location: ./Inicio.php');
