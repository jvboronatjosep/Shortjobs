<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accountType = $_POST['accountType'];
    
    if ($accountType == "empresa") {
        header("Location: InicioSesionE.php");
    } elseif ($accountType == "usuario") {
        header("Location: InicioSesionU.php");
    } else {
        echo "Tipo de cuenta no válido.";
    }
    exit();
}
?>
