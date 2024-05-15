<?php
require_once 'autoloader.php';
$confFile = "./conf.csv";
$gestion = new Trabajos($confFile);
$brandsObtained = $gestion->getTrabajos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - ShortJobs</title>
    <link rel="icon" href="img/LogoShortJobs.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c154837196.js" crossorigin="anonymous"></script>
</head>
<header>
    <div class="logo">
        <a href="Inicio.php"><img src="img/LogoShortJobs.png" alt=""></a>
    </div>
    <nav class="botones">
        <a class="boton" href="Inicio.html">Inicio</a>
        <a class="boton" href="Trabajos.html">Trabajos</a>
        <a class="boton" href="Calendario.html">Calendario</a>
        <a class="boton" href="Destacadas.html">Destacadas</a>
        <a class="boton" href="Contacto.html">Contacto</a>
    </nav>
    <div class="header-buttons">
        <a href="#">Iniciar Sesión</a>
        <a href="#">Registro</a>
    </div>
</header>


<body>
    <div class="container">
        <h2>A TU ALCANCE</h2>
        <h1>Encuentra trabajos cortos</h1>
        <p>¡Encuentra trabajos temporales de forma rápida y segura con ShortJobs! Conectamos a 
        empresas con necesidades de personal temporal y a trabajadores disponibles para hacer trabajos por horas o días. 
        ¡Es la solución perfecta para cubrir tus necesidades laborales de manera flexible y conveniente!</p>
        <div class="row">
            <?php
              $gestion->drawTrabajos($brandsObtained);
            ?>
        </div>
        
        <form action="">
            <input type="submit" value="descubrelo" id="enviar">
        </form>
    </div>
</body>

<footer class="pie-pagina">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 id="contacto">Contacto:</h2>
                <p>Telefono De Contacto:</p>
                <p>☎️ 679 63 78 85</p>
            </div>
            <div class="col-md-4">
                <h2>Siguenos:</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/floridauniversitaria" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/florida_uni/" class="fa fa-instagram"></a>
                    <a href="https://twitter.com/floridauni" class="fa fa-twitter"></a>
                    <a href="https://www.linkedin.com/school/florida-universitaria/?originalSubdomain=es" class="fa fa-linkedin"></a>
                    <a href="https://www.youtube.com/c/floridauniversitaria" class="fa fa-youtube"></a>
                </div>
            </div>
            <div class="col-md-4">
                <small>&copy; 2024 <b>ShortJobs</b> - Todos Los Derechos Reservados.</small>
            </div>
        </div>
    </div>
</footer>
</html>
