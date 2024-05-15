<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - ShortJobs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            margin-top: 100px;
        }
        .selection-form {
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
                <div class="selection-form">
                    <div class="form-header">
                        <h2>Selecciona tu Tipo de Cuenta</h2>
                        <p>Bienvenido a ShortJobs</p>
                    </div>
                    <form action="redirect.php" method="post">
                        <div class="form-group">
                            <label for="accountType">Tipo de Cuenta</label>
                            <select class="form-control" id="accountType" name="accountType" required>
                                <option value="" disabled selected>Seleccione una opción</option>
                                <option value="empresa">Empresa</option>
                                <option value="usuario">Usuario</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Continuar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
