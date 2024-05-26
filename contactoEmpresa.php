<?php

    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $enviado = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $para = 'ShortJobs@shortjobsprime.com';
    $asunto = 'Nuevo mensaje de contacto';
    

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '140b95a8babb39';
    $mail->Password = 'cdae7b0e045b02';//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    $mail->addAddress($para);//Add a recipient

    $mail->isHTML(true);//Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $mensaje;

    if ( $mail->send()) {
        $enviado = true;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto Empresa - ShortJobs</title>
    <link rel="icon" href="img/logobarra.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c154837196.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style_contacto.css">
</head>

<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent mt-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="inicio.php"><img class="ml-4" style="height: 80px; width: 130px; margin-left: 40px;" src="img/LogoShortJobs-removebg-preview.png" alt=""></a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="inicioEmpresa.php" style="margin-right: 15px;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="trabajadoresDestacados.php" style="margin-right: 15px;">Trabajadores Destacados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active" href="ContactoE.php" style="";">Contacto</a>
                </li>
            </ul>
        <div>
            <a href="inicioSesionperfilEmpresa.php"><img src="img/fotoPerfil.png" class="profile-pic" width="40px" style="margin: 30px;"></a>
        </div>
        </div>
    </div>
</nav>
    
<div>
    <div class="img_principal">
        <img src="img/contactoTrabajador.jpg" class="d-block w-100" alt="Imagen principal">
    </div>
</div>


<div class="container-fluid mt-5">


<?php
    if ($enviado) {
        echo "<h3 class='text-center m-5'>Enviado Correctamente :)</h3>";
    }
    else {
?>
    <form class="form-register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">    
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="controls" required>
        
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" class="controls" required>
        
        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" class="controls" required></textarea>
        
        <input type="submit" value="Enviar" class="botons">
    </form>
<?php
    }
?>

</div>

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
</div>
</body>
</html>
