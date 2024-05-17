<?php
require_once 'Conexion.php'
require_once 'Security.php';

$security = new Security();
$message = $security->doLogin();

if ($message) {
    echo $message;
}
?>
