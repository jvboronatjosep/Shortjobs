<?php
require_once 'autoloader.php';


if (isset($_GET['query']))
{
    $filtro = $_GET['query'];
    // Obtener los trabajos que cumplan el filtro
    $trabajos = new Trabajos();
    $lista_trabajos = $trabajos->getTrabajoByNombreODescripción($filtro);

    foreach ($lista_trabajos as $trabajo) {
        $trabajos->drawTrabajo($trabajo);
    }

    //var_dump($lista_trabajos);
}



/*
// Crea una instancia de la clase Trabajos
$gestion = new Trabajos("./conf.csv");

// Verifica si se envió el parámetro 'query' (nombre de la persona)
if(isset($_GET['nombre'])) {
    // Limpia y sanitiza el nombre de la persona buscada
    $nombre = filter_var($_GET['nombre'], FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Obtén el trabajo correspondiente al nombre buscado
    $trabajo = $gestion->getTrabajoByNombre($nombre);

    // Si se encontró un trabajo para el nombre buscado, muestra los detalles
    if($trabajo) {
        $gestion->drawTrabajo($trabajo);
        echo "No se encontraron trabajos para el nombre buscado.";
    }
} else {
    } else {
    // Si no se envió ninguna consulta, muestra todos los trabajos disponibles
    $trabajos = $gestion->getTrabajos();
   
        $gestion->drawTrabajo($trabajo);
    
}*/
?>
