<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de trabajos</title>
</head>

<body>
    <h2>Ingrese los datos del trabajo:</h2>
    <form action="crearTrabajo.php" method="post">
        <label for="nombre">nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="tipo">tipo:</label><br>
        <input type="text" id="tipo" name="tipo" required><br><br>

        <label for="empresa">empresa:</label><br>
        <input type="text" id="empresa" name="empresa" required><br><br>

        <label for="descripcion">descripcion</label><br>
        <input type="text" id="descripcion" name="descripcion" required><br><br>

        <label for="ubicacion">ubicacion</label><br>
        <input type="text" id="ubicacion" name="ubicacion"><br><br>

        <label for=""fecha>fecha:</label><br>
        <input type="date" id="fecha" name="fecha" required><br><br>

        
        <label for="salario">salario:</label><br>
        <input type="text" id="salario" name="salario" required><br><br>

        <label for="duracion">duracion:</label><br>
        <input type="text" id="duracion" name="duracion" required><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>

</html>