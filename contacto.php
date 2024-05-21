<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - ShortJobs</title>
    <link rel="icon" href="img/LogoShortJobs.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c154837196.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style_contacto.css">
</head>
<body  style=" background-color: #E0FFFF;">

<nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php">
        <img class="ml-4" style="height: 80px; width: 130px; margin-left: 40px;" src="img/LogoShortJobs-removebg-preview.png" alt=""></a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="inicio.php" style="margin-right: 15px;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Trabajos.php" style="margin-right: 15px;">Trabajos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Destacadas.php" style="margin-right: 15px;">Destacadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active" href="Contacto.php" style="margin-right: 30px;">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    
    <div>
        <div class="img_principal">
            <img src="img/img_inicio_contacto.jpg" class="d-block w-100" alt="...">
        </div>
    </div>



<div class="container w-100 mb-5">
    <h2 class="mt-5 d-flex justify-content-center">Formulario de Contacto</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $mensaje = htmlspecialchars($_POST['mensaje']);
        $para = 'tu-email@dominio.com'; // Cambia esto a tu dirección de correo electrónico
        $asunto = 'Nuevo mensaje de contacto';
        
        $cuerpoMensaje = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";
        
        $cabeceras = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        if (mail($para, $asunto, $cuerpoMensaje, $cabeceras)) {
            echo '<p class="success">Mensaje enviado correctamente.</p>';
        } else {
            echo '<p class="error">Error al enviar el mensaje. Inténtalo de nuevo más tarde.</p>';
        }
    }
    ?>
    <form class="form-register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h4>Formulario de Registro</h4>
        
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="controls" required>
        
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" class="controls" required>
        
        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" class="controls" required></textarea>
        
        <input type="submit" value="Enviar" class="botons">
    </form>
</div>

</body>

<footer class="pie-pagina">
        <div class="grupo-1">
            <div class="Caja">
                <a href="Inicio.php"><img src="img/LogoShortJobs-removebg-preview.png" alt="" width="200px"></a>
            </div>
            <div class="Caja">
                <div class="Medio">
                    <h2 id="contacto">Contacto:</h2>
                    <p>Telefono De Contacto:</p>
                    <p>☎️ 679 63 78 85</p>
                </div>
            </div>
            <div class="Caja">
                <h2>Siguenos:</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/floridauniversitaria" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/florida_uni/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/floridauni" class="fa fa-twitter"></a>
                    <a href="https://www.linkedin.com/school/florida-universitaria/?originalSubdomain=es" class="fa fa-linkedin"></a>
                    <a href="https://www.youtube.com/c/floridauniversitaria" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>ShortJobs</b> - Todos Los Derechos Reservados.</small>
        </div>
    </footer>
</html>
