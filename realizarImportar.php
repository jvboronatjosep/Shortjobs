<?php

require_once 'autoloader.php'; 

$confFile = "conf.csv";
$importEmpresa = "empresas.csv";
$importUsuarios = "usuarios.csv";
$importTrabajos = "trabajos.csv";
$importador = new Importar($confFile); 
$importador->importarEmpresa($importEmpresa);
$importador->importarUsuarios($importUsuarios);
$importador->importarTrabajos($importTrabajos); 
header('Location: ./Inicio.php');
