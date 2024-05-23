<?php
require_once 'autoloader.php';

// Crea una instancia de la clase Trabajos
$gestion = new Trabajos("./conf.csv");

// Verifica si se envió el parámetro 'query' (nombre de la empresa)
if(isset($_GET['query'])) {
    // Limpia y sanitiza el nombre de la empresa buscada
    $empresa = filter_var($_GET['query'], FILTER_SANITIZE_STRING);
    
    // Obtén el trabajo correspondiente a la empresa buscada
    $trabajo = $gestion->getTrabajosByEmpresa($empresa);

    // Si se encontró un trabajo para la empresa buscada, muestra los detalles
    if($trabajo) {
        $gestion->drawTrabajo($trabajo);
    } else {
        echo "No se encontraron trabajos para la empresa buscada.";
    }
} else {
    // Si no se envió ninguna consulta, muestra todos los trabajos disponibles
    $trabajos = $gestion->getTrabajos();
    foreach ($trabajos as $trabajo) {
        $gestion->drawTrabajo($trabajo);
    }
}
?>
