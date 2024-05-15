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
    <style>
        @font-face {
    font-family: Florida-font;
    src: url(NavineDemo-SemiCondensed.ttf);
}

body {
    margin: 0;
    padding: 0;
    background-color: white;
    color: black;
    font-family: Arial, sans-serif;
}

header {
    display: flex;
    justify-content: space-between;
    min-height: 120px;
    background-color: #788BFF;
    align-items: center;
    padding: 10px;
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    margin-left: 30px;
    height: 100px;
}

nav a {
    font-weight: 600;
    font-size: 18px;
    margin-left: 25px;
    color: white;
    text-decoration: none;
}

nav a:hover {
    color: #FFE600;
}

.header-buttons {
    position: absolute;
    top: 10px;
    right: 10px;
}

.header-buttons a {
    margin-left: 10px;
    text-decoration: none;
    color: white;
    padding: 5px 10px;
    border: 1px solid white;
    border-radius: 30px;
    background-color: #788BFF;
}

.header-buttons a:hover {
    background-color: #FFE600;
    color: black;
}

.carousel-image {
    height: 900px;
    object-fit: cover;
}

#enviar {
    font-family: Verdana, Helvetica;
    background-color: #788BFF;
    font-size: 12pt;
    width: 500px;
    color: white;
    padding: 5px 7px;
    border: none;
    border-radius: 25px;
}

#enviar:hover {
    background-color: #6B7AFF;
}

.pie-pagina {
    width: 100%;
    background-color: #788BFF;
    color: white;
}

.pie-pagina .grupo-1 {
    width: 100%;
    max-width: 4096px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 50px;
    padding: 45px 0px;
}

.pie-pagina .grupo-1 .Caja figure {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pie-pagina .grupo-1 .Caja figure img {
    width: 250px;
}

.pie-pagina .grupo-1 .Caja h2 {
    margin-bottom: 25px;
    font-size: 20px;
    font-family: Florida-font;
}

.pie-pagina .grupo-1 .Caja p {
    margin-bottom: 10px;
    font-family: Florida-font;
}

.pie-pagina .grupo-1 .red-social a {
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: white;
    margin-right: 10px;
    background-color: #535252;
    text-align: center;
    transition:
}
    </style>
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
        <a href="#" style="color: black;">Iniciar Sesión</a>
        <a href="#" style="color: black;">Registro</a>
    </div>
</header>


<body>
    <div class="container-fluid">
       
        <div class="row">
            <?php
              $gestion->drawTrabajos($brandsObtained);
            ?>
        </div>
      
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
            <div class="col-md">
                <small>&copy; 2024 <b>ShortJobs</b> - Todos Los Derechos Reservados.</small>
            </div>
        </div>
    </div>
</footer>
</html>
