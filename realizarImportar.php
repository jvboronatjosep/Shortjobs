<?php

require_once 'autoloader.php'; 

$confFile = "./conf.csv";
//$importEmpresa = "empresas.csv";
//$importUsuarios = "usuarios.csv";
$importTrabajos = "trabajos.csv";
$importador = new Importar($confFile); 
//$importadorEmpresa->importarEmpresa($importEmpresa);
//$importador->importarUsuarios($importUsuarios);
$importador->importarTrabajos($importTrabajos); // Corrección aquí
header('Location: ./Inicio.php');
