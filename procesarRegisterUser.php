<?php
require_once 'autoloader.php';


$conexion = new Conexion('./conf.csv');
$conn = $conexion->getConn();


$dni = $_POST['dni'];
$nombreCompleto = $_POST['nombreCompleto'];
$numeroSeguridadSocial = $_POST['numeroSeguridadSocial'];
$curriculum = $_POST['curriculum'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$correoElectronico = $_POST['correoElectronico'];
$nombreUsuario = $_POST['nombreUsuario'];
$contraseña = $_POST['contraseña'];




$sql = "INSERT INTO usuarios (dni, nombreCompleto, numeroSeguridadSocial, curriculum, direccion, ciudad, correoElectronico, nombreUsuario, contraseña, valoracion)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NULL)";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

$stmt->bind_param("ssissssss", $dni, $nombreCompleto, $numeroSeguridadSocial, $curriculum, $direccion, $ciudad, $correoElectronico, $nombreUsuario, $contraseña);


if ($stmt->execute()) {
    header("Location: empresa-usuario.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
