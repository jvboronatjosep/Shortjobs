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


    public function drawTrabajos($trabajos)
{
    if ($trabajos) {
        foreach ($trabajos as $trabajo) {
            echo '<div class="container-fluid mt-5 d-md-flex justify-content-center" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); background-color: aqua; color: black; border-radius: 10px;">';
            echo '  <div class="col-md-6 d-flex align-items-center justify-content-center">';
            echo '    <div style="padding: 20px; border-radius: 10px;">';
            echo '      <img src="/img/temporada1.jpg" alt="Imagen" class="img-fluid rounded" width="400" height="400">';
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
        }
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

    


}

?>