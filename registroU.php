<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - ShortJobs</title>
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
                        <h2>Registro de Usuario</h2>
                        <p>Por favor, complete el siguiente formulario para registrarse como usuario en ShortJobs</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre Completo</label>
                            <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre completo" required>
                        </div>
                        <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="dni" class="form-control" id="dni" placeholder="Ingrese su DNI" required>
                        </div>
                        <div class="form-group">
                            <label for="numeroSeguridadSocial">Numero de la Seguridad Social</label>
                            <input type="numeroSeguridadSocial" class="form-control" id="numeroSeguridadSocial" placeholder="Ingrese su numero de la Seguridad Social" required>
                        </div>
                        <div class="form-group">
                            <label for="curriculum">Curriculum</label>
                            <input type="curriculum" class="form-control" id="curriculum" placeholder="Ingrese su curriculum" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion">direccion</label>
                            <input type="direccion" class="form-control" id="direccion" placeholder="Ingrese su direccion" required>
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="ciudad" class="form-control" id="ciudad" placeholder="Ingrese su ciudad" required>
                        </div>
                        <div class="form-group">
                            <label for="correoElectronico">Correo Electronico</label>
                            <input type="correoElectronico" class="form-control" id="correoElectronico" placeholder="Ingrese su Correo Electronico" required>
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