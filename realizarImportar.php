<?php

require_once 'autoloader.php'; 

$confFile = "./conf.csv";
$importEmpresa = "empresas.csv";
$importUsuarios = "usuarios.csv";
$importTrabajos = "trabajos.csv";
$importador = new Importar($confFile); 
$importadorEmpresa->importarEmpresa($importEmpresa);
$importadorUsuriaos->importarUsuarios($importUsuarios);
$importadorTrabajos->importarTrabajos($importTrabajos); // Corrección aquí
header('Location: ./Inicio.php');
