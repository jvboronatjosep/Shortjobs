<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .success, .error {
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
            color: white;
        }
        .success {
            background-color: #4CAF50;
        }
        .error {
            background-color: #f44336;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulario de Contacto</h2>
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required>
        
        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" required></textarea>
        
        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>