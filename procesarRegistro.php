<?php
require_once 'autoloader.php';

$confFile = 'conf.csv';
$conexion = new Conexion($confFile);
$conn = $conexion->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['accountType'], $_POST['password'])) {
        $accountType = $_POST['accountType'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 

        if ($accountType == "empresa" && isset($_POST['empresaName'])) {
            $empresaName = $_POST['empresaName'];
            $sql = "INSERT INTO empresas (empresaName, empresaPassword) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $empresaName, $password);
        } elseif ($accountType == "usuario" && isset($_POST['userName'])) {
            $userName = $_POST['userName'];
            $sql = "INSERT INTO usuarios (userName, userPassword) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $userName, $password);
        } else {
            echo "Faltan datos requeridos.";
            exit();
        }

        if ($stmt->execute()) {
            echo "Registro exitoso. Ahora puedes <a href='Empresa-Usuario.php'>iniciar sesión</a>.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Faltan datos requeridos.";
    }

    $conn->close();
} else {
    echo "Método de solicitud no válido.";
}
?>
