<?php
require_once 'autoloader.php';

$confFile = '/ruta/a/tu/conf.csv'; 
$security = new Security($confFile);
$message = $security->doLogin();

if ($message) {
    echo $message;
}

header('Location: Inicio.php');

?>
