<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top mt-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="ml-4" style="height: 50px; width: 80px; margin-left: 40px;" src="img/LogoShortJobs-removebg-preview.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" href="index.html">Inicio </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="temporadas.html">Trabajos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.html">Calendario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="temporadas.html">Contacto</a>
                    </li>
                </ul>

                <div class="header-buttons">
                    <a href="Empresa-Usuario.php" class="btn btn-primary">Iniciar Sesión</a>
                    <a href="Empresa-Usuario.php" class="btn btn-primary">Registro</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/adult-1866533_1920.jpg" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/ai-generated-8593076_1280.jpg" class="d-block w-100 carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/workshop-4524838_1920.jpg" class="d-block w-100 carousel-image" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

        <h2>A TU ALCANCE</h2>
    <h1>Encuentra trabajos cortos</h1>
    <p>¡Encuentra trabajos temporales de forma rápida y segura con ShortJobs! Conectamos a 
    empresas con necesidades de personal temporal y a trabajadores disponibles para hacer trabajos por horas o días. 
    ¡Es la solución perfecta para cubrir tus necesidades laborales de manera flexible y conveniente!</p>
    
    <form action="">
    <input type="submit" value="descubrelo" id="enviar">
    </form>
</body>
</html>
