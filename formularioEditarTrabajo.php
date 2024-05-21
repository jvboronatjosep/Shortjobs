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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Editar Trabajo</h2>
        <form action="editarTrabajo.php" method="post" class="bg-white p-4 rounded shadow-sm">
            <input type="hidden" id="id" name="id" value="<?php echo $trabajo['id'] ?>"> <!-- Cambiado de $job a $trabajo -->

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required value="<?php echo $trabajo['nombre'] ?>"> <!-- Cambiado de $job a $trabajo -->
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control" required value="<?php echo $trabajo['descripcion'] ?>"> <!-- Cambiado de $job a $trabajo -->
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <input type="text" id="tipo" name="tipo" class="form-control" required value="<?php echo $trabajo['tipo'] ?>"> <!-- Cambiado de $job a $trabajo -->
            </div>

            <div class="mb-3">
                <label for="empresa" class="form-label">Empresa:</label>
                <input type="text" id="empresa" name="empresa" class="form-control" required value="<?php echo $trabajo['empresa'] ?>"> <!-- Cambiado de $job a $trabajo -->
            </div>

            <div class="mb-3">
                <label for="ubicacion" class="form-label">Ubicación:</label>
                <input type="text" id="ubicacion" name="ubicacion" class="form-control" value="<?php echo $trabajo['ubicacion'] ?>"> <!-- Cambiado de $job a $trabajo -->
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required value="<?php echo $trabajo['fecha'] ?>"> <!-- Cambiado de $job a $trabajo -->
            </div>

            <div class="mb-3">
                <label for="duracion" class="form-label">Duración:</label>
                <input type="text" id="duracion" name="duracion" class="form-control" required value="<?php echo $trabajo['duracion'] ?>"> <!-- Cambiado de $job a $trabajo -->
            </div>

            <div class="text-center">
                <input type="submit" value="Guardar" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
