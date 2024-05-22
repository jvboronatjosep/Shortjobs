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
    public function getTrabajosByEmpresa($empresa)
{
    $conn = $this->connect();
    $sql = "SELECT * FROM trabajos WHERE empresa = '$empresa'";
    $result = $conn->query($sql);
    $trabajos = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $trabajos[] = $row;
        }
    }
    $conn->close();
    return $trabajos;
}


public function drawTrabajos($trabajos) {

    $trabajos = $this->general();
    
    if ($trabajos) {
        echo '<div class="container mt-5">';
        echo '  <div class="row justify-content-center">'; // Alinea al centro
        foreach ($trabajos as $trabajo) {
            echo '    <div class="col-md-4">';
            echo '      <div class="card shadow" style="max-width: 900px;">'; // Ancho máximo de la tarjeta ajustado
            echo '        <div class="row g-0">';
            echo '          <div class="col-md-4">';
            echo '            <img src="img/trabajoPrueba.png" alt="Imagen" class="img-fluid rounded-start" width="400" height="400">';
            echo '          </div>';
            echo '          <div class="col-md-8">';
            echo '            <div class="card-body">';
            echo '              <h5 class="card-title">' . $trabajo['nombre'] . '</h5>';
            echo '              <p class="card-text">' . $trabajo['descripcion'] . '</p>';
            echo '              <p class="card-text">Tipo: ' . $trabajo['tipo'] . '</p>';
            echo '              <p class="card-text">Empresa: ' . $trabajo['empresa'] . '</p>';
            echo '              <p class="card-text">Ubicación: ' . $trabajo['ubicacion'] . '</p>';
            echo '              <p class="card-text">Fecha: ' . $trabajo['fecha'] . '</p>';
            echo '              <p class="card-text">Salario: ' . $trabajo['salario'] . '</p>';
            echo '              <p class="card-text">Duración: ' . $trabajo['duracion'] . '</p>';
            echo '              <a href="formularioEditarTrabajo.php?id=' . $trabajo['id'] . '" class="btn btn-primary me-2">Editar Trabajo</a>';
            echo '              <a href="detalle.php?id=' . $trabajo['id'] . '" class="btn btn-secondary me-2">Ver</a>';
            echo '              <a href="borrarTrabajo.php?id=' . $trabajo['id'] . '" class="btn btn-danger">Borrar</a>';
            echo '            </div>';
            echo '          </div>';
            echo '        </div>';
            echo '      </div>';
            echo '    </div>';
        }
        echo '  </div>';
        echo '</div>';
    }
}






    public function editarTrabajo($id, $nombre, $descripcion, $tipo, $empresa, $ubicacion, $fecha, $duracion)
    {
        $conn = $this->connect();
        $sql = "UPDATE `trabajos` SET `nombre` = '$nombre', `descripcion` = '$descripcion', `tipo` = '$tipo', `empresa` = '$empresa', `ubicacion` = '$ubicacion', `fecha` = '$fecha', `duracion` = '$duracion' WHERE `trabajos`.`id` = $id";
        if ($conn->query($sql) === TRUE) {
            return "Registro actualizado correctamente";
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    public function getTrabajoById($id)
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM trabajos WHERE id = '$id'";
        $result = $conn->query($sql);
        $trabajo = null; 
        if ($result->num_rows > 0) {
            $trabajo = $result->fetch_assoc(); 
        }
        return $trabajo;
    }
    public function getTrabajoByName($userName)
{
    $conn = $this->connect();
    $sql = "SELECT * FROM trabajos WHERE nombre = '$userName'";
    $result = $conn->query($sql);
    $trabajo = null;
    if ($result->num_rows > 0) {
        $trabajo = $result->fetch_assoc();
    }
    $conn->close();
    return $trabajo;
}

public function drawTrabajo($trabajo)
{
    if ($trabajo) {
        echo '<div class="container-fluid mt-5 d-md-flex justify-content-center" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); background-color: #f5f5f5; color: black; border-radius: 10px;">';
        echo '  <div class="col-md-6 d-flex align-items-center justify-content-center">';
        echo '    <div style="padding: 20px; border-radius: 10px;">';
        echo '      <img src="/img/temporada1.jpg" alt="Amazon Prime Video" class="img-fluid rounded" width="400" height="400">';
        echo '      <p class="text-center mt-3" style="font-size: 20px;">' . $trabajo['nombre'] . ' </p>';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="col-md-6 px-5">';
        echo '    <p class="mb-4">' . $trabajo['descripcion'] . '</p>';
        echo '    <p class="mb-4">Tipo: ' . $trabajo['tipo'] . '</p>';
        echo '    <p class="mb-4">Empresa: ' . $trabajo['empresa'] . '</p>';
        echo '    <p class="mb-4">Ubicación: ' . $trabajo['ubicacion'] . '</p>';
        echo '    <p class="mb-4">Fecha: ' . $trabajo['fecha'] . '</p>';
        echo '    <p class="mb-4">Salario: ' . $trabajo['salario'] . '</p>';
        echo '    <p class="mb-4">Duración: ' . $trabajo['duracion'] . '</p>';
        echo "<a href='formularioEditarTrabajo.php?id=" . $trabajo['id'] . "'><button>Editar Trabajo </button></a>";
        echo "<a href='detalle.php?id=" . $trabajo['id'] . "'><button>Ver</button></a>";
        echo "<a href='borrarTrabajo.php?id=" . $trabajo['id'] . "'><button>Borrar</button></a>";
        echo '  </div>';
        echo '</div>';
    } else {
        echo "Trabajo no encontrado.";
    }
}

public function drawDetalle($trabajo)
{
    if ($trabajo) {
        echo '<div class="container-fluid mt-5 d-md-flex justify-content-center" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); background-color: #f5f5f5; color: black; border-radius: 10px;">';
        echo '  <div class="col-md-6 d-flex align-items-center justify-content-center">';
        echo '    <div style="padding: 20px; border-radius: 10px;">';
        echo '      <img src="/img/temporada1.jpg" alt="Amazon Prime Video" class="img-fluid rounded" width="400" height="400">';
        echo '      <p class="text-center mt-3" style="font-size: 20px;">' . $trabajo['nombre'] . ' </p>';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="col-md-6 px-5">';
        echo '    <p class="mb-4">' . $trabajo['descripcion'] . '</p>';
        echo '    <p class="mb-4">Tipo: ' . $trabajo['tipo'] . '</p>';
        echo '    <p class="mb-4">Empresa: ' . $trabajo['empresa'] . '</p>';
        echo '    <p class="mb-4">Ubicación: ' . $trabajo['ubicacion'] . '</p>';
        echo '    <p class="mb-4">Fecha: ' . $trabajo['fecha'] . '</p>';
        echo '    <p class="mb-4">Salario: ' . $trabajo['salario'] . '</p>';
        echo '    <p class="mb-4">Duración: ' . $trabajo['duracion'] . '</p>';
        echo "<a href='formularioEditarTrabajo.php?id=" . $trabajo['id'] . "'><button>Editar Trabajo </button></a>";
        echo "<a href='borrarTrabajo.php?id=" . $trabajo['id'] . "'><button>Borrar</button></a>";
        echo '  </div>';
        echo '</div>';
    } else {
        echo "Trabajo no encontrado.";
    }
}


    public function borrarUnTrabajo($id){
        $conn = $this->connect();


        $sql = "DELETE FROM trabajos Where id = $id";
        $conn->query($sql);
    }

    public function createTrabajo($nombre,$tipo,$empresa,$descripcion,$ubicacion,$fecha,$salario,$duracion)
    {
        $conn = $this->connect();
        $sql = "INSERT INTO trabajos (nombre, tipo, empresa, descripcion, ubicacion, fecha, salario,duracion) VALUES ('$nombre', '$tipo', '$empresa', '$descripcion', '$ubicacion', '$fecha', '$salario','$duracion')";
        if ($conn->query($sql) === TRUE) {
            return "New record created successfully";
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
    }

        
    public function trabajadoretop() {
        $conn = $this->connect();
        $sql = "SELECT dni, nombreCompleto, numeroSeguridadSocial, curriculum, direccion, ciudad, correoElectronico, nombreUsuario, contraseña, AVG(valoracion) AS media FROM usuarios GROUP BY dni, nombreUsuario ORDER BY media DESC LIMIT 6";
        $result = $conn->query($sql);
        
        $top_cinco = array();
        if ($num = $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $top_cinco[] = $row;
            }
        }
        $conn->close();
        


        foreach ($top_cinco as $usuario) {
            echo "DNI: " . $usuario["dni"] . "<br>";
            echo "Nombre completo: " . $usuario["nombreCompleto"] . "<br>";
            echo "Número de Seguridad Social: " . $usuario["numeroSeguridadSocial"] . "<br>";
            echo "Curriculum: " . $usuario["curriculum"] . "<br>";
            echo "Dirección: " . $usuario["direccion"] . "<br>";
            echo "Ciudad: " . $usuario["ciudad"] . "<br>";
            echo "Correo electrónico: " . $usuario["correoElectronico"] . "<br>";
            echo "Nombre de usuario: " . $usuario["nombreUsuario"] . "<br>";
            echo "Contraseña: " . $usuario["contraseña"] . "<br>";
            echo "Media de valoración: " . $usuario["media"] . "<br>";
            echo "<br>";
        }
        
        return $top_cinco;
        
    }



    
    public function general(){
        $conn = new Conexion;
        $data = $conn->getConn();

        $resultados_por_pagina = 6;

        $pagina_actual = (isset($_GET['page']) && ($_GET['page'])) ? $_GET['page'] : 1;
        $inicio = ($pagina_actual - 1) * $resultados_por_pagina;

        // Obtenemos el criterio de orden actual, Cambiado para la ordenacion
        $order = $this->getCurrentOrder();

        //Cambiado para la ordenacion
        $cervezas = "SELECT * FROM trabajos ORDER BY {$order['field']} {$order['direction']} LIMIT $inicio, $resultados_por_pagina";
        $resultado = mysqli_query($data, $cervezas);
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
        $conn = new Conexion;
        $data = $conn->getConn();

        $pagina_actual = (isset($_GET['page']) && ($_GET['page'])) ? $_GET['page'] : 1;

        $resultados_por_pagina = 6;

        $total_registros_query = "SELECT COUNT(*) AS total FROM trabajos ";
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