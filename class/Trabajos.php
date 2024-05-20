<?php

class Trabajos extends Conexion
{

    public function __construct($confFile)
    {
        parent::__construct($confFile);
    }

    public function getTrabajos()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM trabajos";
        $result = $conn->query($sql);
        $jobs = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $jobs[] = $row;
            }
        }
        return $jobs;
    }



    public function drawTrabajos($jobs)
{
    foreach ($jobs as $job) {
        echo '<div class="container-fluid mt-5 d-md-flex justify-content-center" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); background-color: #f5f5f5; color: black; border-radius: 10px;">';
        echo '  <div class="col-md-6 d-flex align-items-center justify-content-center">';
        echo '    <div style="padding: 20px; border-radius: 10px;">'; 
        echo '      <img src="/img/temporada1.jpg" alt="Amazon Prime Video" class="img-fluid rounded" width="400" height="400">';
        echo '      <p class="text-center mt-3" style="font-size: 20px;">' . $job['nombre'] . ' </p>';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="col-md-6 px-5">';
        echo '    <p class="mb-4">' . $job['descripcion'] . '</p>';
        echo '    <p class="mb-4">Tipo: ' . $job['tipo'] . '</p>';
        echo '    <p class="mb-4">Empresa: ' . $job['empresa'] . '</p>';
        echo '    <p class="mb-4">Ubicación: ' . $job['ubicacion'] . '</p>';
        echo '    <p class="mb-4">Fecha: ' . $job['fecha'] . '</p>';
        echo '    <p class="mb-4">Salario: ' . $job['salario'] . '</p>';
        echo '    <p class="mb-4">Duración: ' . $job['duracion'] . '</p>';
        echo '  </div>';
        echo '</div>';
    }
}

public function takeBeer(){
    $connBeer = new ConnectionBeer;
    $dataBeer = $connBeer->getConn();

    $resultados_por_pagina = 10;

    $pagina_actual = (isset($_GET['page']) && ($_GET['page'])) ? $_GET['page'] : 1;
    $inicio = ($pagina_actual - 1) * $resultados_por_pagina;

    // Obtenemos el criterio de orden actual, Cambiado para la ordenacion
    $order = $this->getCurrentOrder();

    //Cambiado para la ordenacion
    $cervezas = "SELECT * FROM cervezas ORDER BY {$order['field']} {$order['direction']} LIMIT $inicio, $resultados_por_pagina";
    $resultado = mysqli_query($dataBeer, $cervezas);
    if (mysqli_num_rows($resultado) >0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $datos[] = $fila;
        }
    }else {
        echo "Error";
    }
    return $datos;
}

public function showNavigation(){
    $connBeer = new ConnectionBeer;
    $dataBeer = $connBeer->getConn();

    $pagina_actual = (isset($_GET['page']) && ($_GET['page'])) ? $_GET['page'] : 1;

    $resultados_por_pagina = 10;

    $total_registros_query = "SELECT COUNT(*) AS total FROM cervezas    ";
    $total_registros_resultado = mysqli_query($dataBeer, $total_registros_query);
    $total_registros_fila = mysqli_fetch_assoc($total_registros_resultado);
    $total_registros = $total_registros_fila['total'];
    $total_paginas = ceil($total_registros / $resultados_por_pagina);

    echo '<div class="pagination">';

    $pagina_anterior = $pagina_actual - 1;
    $pagina_siguiente = $pagina_actual + 1;
    
    $pagina_fin = $total_paginas - 1;

    if ($pagina_actual == 0) {
        echo '<-'; 
    } else {
        echo '<a href="?page=1"> << </a> ';
        echo '<a href="?page=' . $pagina_anterior . '"> <- </a> ';    
    }

    if ($pagina_actual == 1) {
        echo '<strong> Inicio </strong> '; 
    } else {
        echo '<a href="?page=1"> Inicio </a> ';
    }
    
    for ($pagina = 2; $pagina <= $pagina_fin; $pagina++) {
        if ($pagina == $pagina_actual) { // Si la página actual coincide con la página actual del bucle
            echo '<strong><a href="?page=' . $pagina . '">' . $pagina . '</a></strong> '; // Resaltar en negrita
        } else {
            echo '<a href="?page=' . $pagina . '">' . $pagina . '</a> '; // Dejar como está
        }
    }  

    

    if ($pagina_actual == $total_paginas) {
        echo '<strong> Fin </strong> '; 
    } else {
        echo '<a href="?page=' . $total_paginas . '"> Fin </a> '; 
    }
    
    if ($pagina_actual != $total_paginas) {
        if ($pagina_actual == 0) {
            echo '->'; 
        } else {
            echo '<a href="?page=' . $pagina_siguiente . '"> -> </a> '; 
            echo '<a href="?page=' . $total_paginas . '">  >> </a> '; 
        }
    } else {
        if ($pagina_actual == 0) {
            echo '->'; 
        } else {
            echo '<a href="?page=' . ($pagina_siguiente - 1) . '"> -> </a> '; 
            echo '<a href="?page=' . ($total_paginas - 1) . '">  >> </a> '; 
        }
    }
    

    $_SESSION['currentPage'] = $this->getCurrentPage();
    
    echo '</div>';
}

public function getCurrentPage() {
    if(isset($_GET['page'])) {
        return $_GET['page'];
    } elseif(isset($_SESSION['currentPage'])) {
        return $_SESSION['currentPage'];
    } else {
        return 1;
    }
}

public function getCurrentOrder() {
    $defaultOrder = array('campo' => 'nombre', 'orden' => 'ASC'); // Orden predeterminado
    $allowedOrders = array( // Lista de criterios de ordenación permitidos
        'nombre' => array('nombre', 'Nombre', 'nombre'),
        'nacionalidad' => array('nacionalidad', 'Nacionalidad', 'nacionalidad'),
        'valoracion' => array('valoracion', 'Valoracion', 'valoracion')
    );

    // Si hay un parámetro de ordenación en la URL, lo validamos y lo establecemos
    if(isset($_GET['order']) && isset($allowedOrders[$_GET['order']])) {
        $orderField = $_GET['order'];
    } else {
        $orderField = $defaultOrder['campo']; // Si no hay un parámetro de ordenación válido, usamos el predeterminado
    }

    // Si hay un parámetro de dirección de orden en la URL, lo validamos y lo establecemos
    if(isset($_GET['dir']) && ($_GET['dir'] === 'DESC')) {
        $orderDirection = 'DESC';
    } else {
        $orderDirection = $defaultOrder['orden']; // Si no hay un parámetro de dirección de orden válido, usamos el predeterminado
    }

    return array('field' => $orderField, 'direction' => $orderDirection);
}

}
?>