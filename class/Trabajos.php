<?php

class Trabajos extends Conexion
{

    private $confFile;

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

public function drawDetalleSinCrud($trabajo)
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
        $sql = "INSERT INTO trabajos (nombre, tipo, empresa, descripcion, ubicacion, fecha, salario, duracion) VALUES ('$nombre', '$tipo', '$empresa', '$descripcion', '$ubicacion', '$fecha', '$salario','$duracion')";
        if ($conn->query($sql) === TRUE) {
            return "New record created successfully";
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
    }

        
    public function trabajadorestop() {
        $conn = $this->connect();
        $sql = "SELECT dni, nombreCompleto, numeroSeguridadSocial, curriculum, direccion, ciudad, correoElectronico, nombreUsuario, contraseña, AVG(valoracion) AS media FROM usuarios GROUP BY dni, nombreUsuario ORDER BY media DESC LIMIT 6";
        $result = $conn->query($sql);
        
        $top_cinco = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $top_cinco[] = $row;
            }
        }
        $conn->close();
        
        echo "<div class='container mt-5 mb-5'>";
        echo "<div class='row'>";
        foreach ($top_cinco as $usuario) {
            echo "<div class='col-md-6 mb-4'>";
            echo "<div class='card shadow-lg h-100 d-flex flex-column justify-content-between'>";
            echo "<div>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>Nombre completo: " . $usuario["nombreCompleto"] . "</h5>";
            echo "<p class='card-text'>Número de Seguridad Social: " . $usuario["numeroSeguridadSocial"] . "</p>";
            echo "<p class='card-text'>Curriculum: " . $usuario["curriculum"] . "</p>";
            echo "<p class='card-text'>Dirección: " . $usuario["direccion"] . "</p>";
            echo "<p class='card-text'>Ciudad: " . $usuario["ciudad"] . "</p>";
            echo "<p class='card-text'>Correo electrónico: " . $usuario["correoElectronico"] . "</p>";
            echo "<p class='card-text'>Nombre de usuario: " . $usuario["nombreUsuario"] . "</p>";
            echo "<p class='card-text'>Contraseña: " . $usuario["contraseña"] . "</p>";
            echo "<p class='card-text'>Media de valoración: " . $usuario["media"] . "</p>";
            echo "</div>";
            echo "</div>";
            echo "<div>";
            echo "<img src='ruta/a/la/imagen.jpg' class='mt-2 ms-auto' alt='Imagen' style='width: 50px;'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
        
        return $top_cinco;
    }
    
    
    
    

    public function drawTrabajos($trabajos) {
        $trabajos = $this->general();
        
        if ($trabajos) {
            echo '<div class="container mt-5">';
            echo '  <div class="row justify-content-center">';
            foreach ($trabajos as $trabajo) {
                echo '    <div class="col-md-4">';
                echo '      <div class="card shadow" style="max-width: 900px;">';
                echo '        <div class="row g-0">';
                echo '          <div class="col-md-4">';
                echo '            <img src="img/trabajoPrueba.png" alt="Imagen" class="img-fluid rounded-start" width="400" height="400">';
                echo '          </div>';
                echo '          <div class="col-md-8">';
                echo '            <div class="card-body">';
                echo '              <h5 class="card-title">' . htmlspecialchars($trabajo['nombre']) . '</h5>';
                echo '              <p class="card-text">' . htmlspecialchars($trabajo['descripcion']) . '</p>';
                echo '              <p class="card-text">Tipo: ' . htmlspecialchars($trabajo['tipo']) . '</p>';
                echo '              <p class="card-text">Empresa: ' . htmlspecialchars($trabajo['empresa']) . '</p>';
                echo '              <p class="card-text">Ubicación: ' . htmlspecialchars($trabajo['ubicacion']) . '</p>';
                echo '              <p class="card-text">Fecha: ' . htmlspecialchars($trabajo['fecha']) . '</p>';
                echo '              <p class="card-text">Salario: ' . htmlspecialchars($trabajo['salario']) . '</p>';
                echo '              <p class="card-text">Duración: ' . htmlspecialchars($trabajo['duracion']) . '</p>';
                echo '              <a href="formularioEditarTrabajo.php?id=' . urlencode($trabajo['id']) . '" class="btn btn-primary me-2">Editar Trabajo</a>';
                echo '              <a href="detalle.php?id=' . urlencode($trabajo['id']) . '" class="btn btn-secondary me-2">Ver</a>';
                echo '              <a href="borrarTrabajo.php?id=' . urlencode($trabajo['id']) . '" class="btn btn-danger">Borrar</a>';
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


    public function drawTrabajosSinCrud($trabajos) {
        $trabajos = $this->general();
        
        if ($trabajos) {
            echo '<div class="container mt-5">';
            echo '  <div class="row justify-content-center">';
            foreach ($trabajos as $trabajo) {
                echo '    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">';
                echo '      <div class="card shadow" style="width: 100%;">';
                echo '        <div class="row g-0">';
                echo '          <div class="col-4">';
                echo '            <img src="img/trabajoPrueba.png" alt="Imagen" class="img-fluid rounded-start" style="max-height: 150px; object-fit: cover;">';
                echo '          </div>';
                echo '          <div class="col-8">';
                echo '            <div class="card-body">';
                echo '              <h5 class="card-title">' . $trabajo['nombre'] . '</h5>';
                echo '              <p class="card-text">' . $trabajo['descripcion'] . '</p>';
                echo '              <p class="card-text">Tipo: ' . $trabajo['tipo'] . '</p>';
                echo '              <p class="card-text">Empresa: ' . $trabajo['empresa'] . '</p>';
                echo '              <p class="card-text">Ubicación: ' . $trabajo['ubicacion'] . '</p>';
                echo '              <p class="card-text">Fecha: ' . $trabajo['fecha'] . '</p>';
                echo '              <p class="card-text">Salario: ' . $trabajo['salario'] . '</p>';
                echo '              <p class="card-text">Duración: ' . $trabajo['duracion'] . '</p>';
                echo '              <a href="detalle.php?id=' . urlencode($trabajo['id']) . '" class="btn btn-secondary me-2">Ver</a>';
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
    


    public function general() {
        $conn = new Conexion($this->confFile);
        $data = $conn->getConn();

        $resultados_por_pagina = 6;

        $pagina_actual = (isset($_GET['page']) && ($_GET['page'])) ? $_GET['page'] : 1;
        $inicio = ($pagina_actual - 1) * $resultados_por_pagina;

        $order = $this->getCurrentOrder();

        $cervezas = "SELECT * FROM trabajos ORDER BY {$order['field']} {$order['direction']} LIMIT $inicio, $resultados_por_pagina";
        $resultado = mysqli_query($data, $cervezas);
        $datos = [];
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                $datos[] = $fila;
            }
        } else {
            echo "Error";
        }
        return $datos;
    }

    public function showNavigation() {
        $conn = new Conexion($this->confFile);
        $data = $conn->getConn();

        $pagina_actual = (isset($_GET['page']) && ($_GET['page'])) ? $_GET['page'] : 1;

        $resultados_por_pagina = 6;

        $total_registros_query = "SELECT COUNT(*) AS total FROM trabajos";
        $total_registros_resultado = mysqli_query($data, $total_registros_query);
        $total_registros_fila = mysqli_fetch_assoc($total_registros_resultado);
        $total_registros = $total_registros_fila['total'];
        $total_paginas = ceil($total_registros / $resultados_por_pagina);

        echo '<div class="pagination">';

        $pagina_anterior = $pagina_actual - 1;
        $pagina_siguiente = $pagina_actual + 1;

        if ($pagina_actual > 1) {
            echo '<a href="?page=1">  <<  </a> ';
            echo '<a href="?page=' . $pagina_anterior . '">  <-  </a> ';
        } else {
            echo '<span> << </span> ';
            echo '<span>‎ <-</span> ';
        }

        if ($pagina_actual == 1) {
            echo '<strong> ‎ Inicio ‎  </strong> ';
        } else {
            echo '<a href="?page=1">‎  Inicio ‎  </a> ';
        }

        for ($pagina = 2; $pagina < $total_paginas; $pagina++) {
            if ($pagina == $pagina_actual) {
                echo '<strong>' . $pagina . '</strong> ';
            } else {
                echo '<a href="?page=' . $pagina . '">' . $pagina . '</a> ';
            }
        }

        if ($pagina_actual == $total_paginas) {
            echo '<strong> Fin</strong> ';
        } else {
            echo '<a href="?page=' . $total_paginas . '"> ‎ Fin ‎ </a> ';
        }

        if ($pagina_actual < $total_paginas) {
            echo '<a href="?page=' . $pagina_siguiente . '"> -> </a> ';
            echo '<a href="?page=' . $total_paginas . '"> ‎ >> </a> ';
        } else {
            echo '<span>-></span> ';
            echo '<span> >> </span> ';
        }

        echo '</div>';
    }

    public function getCurrentPage() {
        if (isset($_GET['page'])) {
            return $_GET['page'];
        } elseif (isset($_SESSION['currentPage'])) {
            return $_SESSION['currentPage'];
        } else {
            return 1;
        }
    }

    public function getCurrentOrder() {
        $defaultOrder = array('campo' => 'nombre', 'orden' => 'ASC');
        $allowedOrders = array(
            'nombre' => array('nombre', 'Nombre', 'nombre'),
            'valoracion' => array('valoracion', 'Valoracion', 'valoracion')
        );

        if (isset($_GET['order']) && isset($allowedOrders[$_GET['order']])) {
            $orderField = $_GET['order'];
        } else {
            $orderField = $defaultOrder['campo'];
        }

        if (isset($_GET['dir']) && ($_GET['dir'] === 'DESC')) {
            $orderDirection = 'DESC';
        } else {
            $orderDirection = $defaultOrder['orden'];
        }

        return array('field' => $orderField, 'direction' => $orderDirection);
    }
}
?>