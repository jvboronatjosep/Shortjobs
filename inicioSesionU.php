<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión Usuario - ShortJobs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <div class="form-header">
                        <h2>Inicio de Sesión para Usuarios</h2>
                        <p>Bienvenido a ShortJobs</p>
                    </div>
                    <form action="procesarLogin.php" method="POST">
                        <div class="form-group">
                            <label for="userName">Nombre de usuario</label>
                            <input type="userName" class="form-control" id="userName" name="userName" placeholder="Ingrese su nombre de usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="userPassword">Contraseña</label>
                            <input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Ingrese su contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                        <div class="form-footer mt-3 text-center">
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
