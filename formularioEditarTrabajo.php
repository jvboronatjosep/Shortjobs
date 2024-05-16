<?php
require_once 'autoloader.php';
$confFile = "./conf.csv";
$gestion = new Trabajos($confFile);
$id = $_GET['id'];
$trabajo = $gestion->getTrabajoById($id); // Cambiado de $job a $trabajo
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Trabajo</title>
</head>

<body>
    <h2>Ingrese los datos de la serie de televisión:</h2>
    <form action="editarTrabajo.php" method="post">
        <input type="hidden" id="id" name="id" value="<?php echo $trabajo['id'] ?>"> <!-- Cambiado de $job a $trabajo -->

        <label for="titulo">nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required value="<?php echo $trabajo['nombre'] ?>"><br><br> <!-- Cambiado de $job a $trabajo -->

        <label for="creador">descripcion:</label><br>
        <input type="text" id="descripcion" name="descripcion" required value="<?php echo $trabajo['descripcion'] ?>"><br><br> <!-- Cambiado de $job a $trabajo -->

        <label for="temporadas">tipo:</label><br>
        <input type="text" id="tipo" name="tipo" required value="<?php echo $trabajo['tipo'] ?>"><br><br> <!-- Cambiado de $job a $trabajo -->

        <label for="anoInicio">empresa</label><br>
        <input type="text" id="empresa" name="empresa" required value="<?php echo $trabajo['empresa'] ?>"><br><br> <!-- Cambiado de $job a $trabajo -->

        <label for="anoFin">ubicacion</label><br>
        <input type="text" id="ubicacion" name="ubicacion" value="<?php echo $trabajo['ubicacion'] ?>"><br><br> <!-- Cambiado de $job a $trabajo -->

        <label for="fecha">fecha:</label><br>
        <input type="date" id="fecha" name="fecha" required value="<?php echo $trabajo['fecha'] ?>"><br><br> <!-- Cambiado de $job a $trabajo -->

        <label for="duracion">País:</label><br>
        <input type="duracion" id="duracion" name="duracion" required value="<?php echo $trabajo['duracion'] ?>"><br><br> <!-- Cambiado de $job a $trabajo -->


        <input type="submit" value="Guardar">
    </form>
   
</body>

</html>
