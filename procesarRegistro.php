<?php
require_once 'Conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accountType = $_POST['accountType'];
    $userName = $_POST['userName'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 

    if ($accountType == "empresa") {
        $empresaName = $_POST['empresaName'];
        $sql = "INSERT INTO empresas (empresaName, securePassword, empresaPassword) VALUES ('$email', '$password', '$companyName')";
    } else {
        $name = $_POST['userName'];
        $sql = "INSERT INTO usuarios (userName, securePassword, userPasword) VALUES ('$email', '$password', '$userName')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. Ahora puedes <a href='Empresa-Usuario.php'>iniciar sesión</a>.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
