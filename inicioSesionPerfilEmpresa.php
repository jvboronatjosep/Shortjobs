<?php
require_once 'autoloader.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión Empresa - ShortJobs</title>
    <link rel="icon" href="img/logobarra.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        .login-container {
            margin-top: 100px;
        }
        .login-form {
            padding: 30px;
            background-color: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
        .form-footer a {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <div class="form-header">
                        <h2>Inicio de Sesión para Empresa</h2>
                        <p>Bienvenido a ShortJobs</p>
                    </div>
                    <form action="perfilEmpresa.php" method="post">
                        <div class="form-group">
                            <label for="empresaName">Nombre de Empresa</label>
                            <input type="text" class="form-control" id="empresaName" name="empresaName" placeholder="Ingrese nombre de usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="empresaPassword">Contraseña</label>
                            <input type="password" class="form-control" id="empresaPassword" name="empresaPassword" placeholder="Ingrese su contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                        <div class="form-footer">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                            <a href="registroU.php">¿No tienes una cuenta? Regístrate como Usuario</a>
                            <a href="registroE.php">¿Eres una empresa? Regístrate aquí</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
