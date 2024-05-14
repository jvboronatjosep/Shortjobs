<?php

require_once 'autoloader.php'; 

$confFile = "./conf.csv";
//$importEmpresa = "empresas.csv";
$importUsuarios = "usuarios.csv";
$importador = new Importar($confFile); 
//$importadorEmpresa->importarEmpresa($importEmpresa);
$importador->importarUsuarios($importUsuarios);
header('Location: ./Inicio.php');
