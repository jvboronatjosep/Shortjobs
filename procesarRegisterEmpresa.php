<?php
header ("Location: empresa-usuario.php");
require_once 'autoloader.php';

$conexion = new Conexion('./conf.csv');
$conn = $conexion->getConn();

$tema = $_POST['tema'];
$nombre = $_POST['nombre'];
$sedes = $_POST['sedes'];
$contraseña = $_POST['contraseña'];


$sql = "INSERT INTO empresas (tema, nombre, sedes, contraseña, valoracion) VALUES (?, ?, ?, ?, NULL)";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param("ssss", $tema, $nombre, $sedes, $contraseña);

if ($stmt->execute()) {
    
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
