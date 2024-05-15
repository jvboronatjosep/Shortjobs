<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empresa - ShortJobs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .register-container {
            margin-top: 100px;
        }
        .register-form {
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
    <div class="container register-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="register-form">
                    <div class="form-header">
                        <h2>Registro de Empresa</h2>
                        <p>Por favor, complete el siguiente formulario para registrar su empresa en ShortJobs</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="companyName">Nombre de la Empresa</label>
                            <input type="text" class="form-control" id="companyName" placeholder="Ingrese el nombre de su empresa" required>
                        </div>
                        <div class="form-group">
                            <label for="userName">Nombre de usuario</label>
                            <input type="userName" class="form-control" id="userName" placeholder="Ingrese nombre de usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="tema">Tema</label>
                            <input type="tema" class="form-control" id="tema" placeholder="Ingrese el tema de la empresa" required>
                        </div>
                        <div class="form-group">
                            <label for="sedes">Sedes</label>
                            <input type="sedes" class="form-control" id="sedes" placeholder="Ingrese las sedes" required>
                        </div>
                        <div class="form-group">
                            <label for="userPassword">Contraseña</label>
                            <input type="userPassword" class="form-control" id="userPassword" placeholder="Ingrese su contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
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
