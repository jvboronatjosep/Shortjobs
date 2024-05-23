<?php
require_once 'autoloader.php';

$confFile = "./conf.csv";
$gestion = new Empresas($confFile);
$trabajos = new Trabajos($confFile);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - ShortJobs</title>
    <link rel="icon" href="img/logobarra.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c154837196.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style_inicio_empresa.css">
    <style>
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php"><img class="ml-4" style="height: 80px; width: 130px; margin-left: 40px;" src="img/LogoShortJobs-removebg-preview.png" alt=""></a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="inicioTrabajador.php" style="margin-right: 15px;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="trabajos.php" style="margin-right: 15px;">Trabajos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active" href="empresasDestacadas.php" style="margin-right: 15px;">Empresas destacadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="ContactoU.php">Contacto</a>
                </li>
            </ul>
        <div>
            <a href="perfilUsuario.php"><img src="img/fotoPerfil.png" class="profile-pic" width="40px" style="margin: 30px;"></a>
        </div>
        </div>
    </div>
</nav>
    
    <div>
        <div class="img_principal">
            <img src="img/empresasDestacadas.jpg" class="d-block w-100" alt="...">
        </div>
    </div>

<div>
    <h3 class="d-flex justify-content-center  mt-5">Empresas Destacadas</h3>
    <?php
        $empresas = new Empresas($confFile);
        $empresas->empresastop();
    ?>
</div>


</body>

<div class="contacto"><footer class="pie-pagina">
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
                    <a href="https://www.facebook.com/share/uYwJ7fS539XhHXbm/?mibextid=LQQJ4d" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/shortjobs?igsh=MW9qb2xweTd6ZzJzZw%3D%3D&utm_source=qr" class="fa fa-instagram"></a>
                    <a href="https://x.com/shortjobs12?s=21&t=3ACYm1uHNjtFZz8zHOWisA" class="fa fa-twitter"></a>
                    <a href="https://www.linkedin.com/in/shortjobs-13414630b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="fa fa-linkedin"></a>
                    <a href="https://www.youtube.com/c/floridauniversitaria" class="fa fa-youtube"></a>
                </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2024 <b>ShortJobs</b> - Todos Los Derechos Reservados.</small>
    </div>
</footer></div>
</html>
