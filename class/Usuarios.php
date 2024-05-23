<?php


require_once "autoloader.php";
class Usuarios extends Conexion
{
    public function __construct($confFile)
    {
        parent::__construct($confFile);
    }

    public function getUsuarios()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);
        $empresas = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $empresas[] = $row;
            }
        }
        return $empresas;
    }


    public function getUsuarioById($userName)
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM usuarios WHERE dni = '$userName'";
        $result = $conn->query($sql);
        $trabajo = null;
        if ($result->num_rows > 0) {
            $trabajo = $result->fetch_assoc();
        }
        return $trabajo;
    }

    public function getUSerByDNI($userName)
    {
        $conn = $this->connect();
        $sql = "SELECT dni FROM usuarios WHERE nombreCompleto = '$userName'";
        $result = $conn->query($sql);
        $nombre = null;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nombre = $row['nombreCompleto'];
        }
        $conn->close();
        return $nombre;
    }

    public function drawNombreUser($userName)
    {
        $name = $this->getUserByName($userName);
        if ($name) {
            echo "<h1>$name </h1>";
        } else {
            echo "<h1>Usuario no encontrada</h1>";
        }
    }
    function drawUsers($users)
    {
        foreach ($users as $user) {
            echo '<div class="container-fluid mt-5 d-md-flex justify-content-center" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); background-color: #f5f5f5; color: black; border-radius: 10px;">';
            echo '  <div class="col-md-6 d-flex align-items-center justify-content-center">';
            echo '    <div style="padding: 20px; border-radius: 10px;">';
            echo '      <img src="/img/temporada1.jpg" alt="Amazon Prime Video" class="img-fluid rounded" width="400" height="400">';
            echo '      <p class="text-center mt-3" style="font-size: 20px;">' . $user['nombreCompleto'] . '</p>';
            echo '    </div>';
            echo '  </div>';
            echo '  <div class="col-md-6 px-5">';
            echo '    <p class="mb-4"><strong>DNI:</strong> ' . $user['dni'] . '</p>';
            echo '    <p class="mb-4"><strong>Nombre Completo:</strong> ' . $user['nombreCompleto'] . '</p>';
            echo '    <p class="mb-4"><strong>Número Seguridad Social:</strong> ' . $user['numeroSeguridadSocial'] . '</p>';
            echo '    <p class="mb-4"><strong>Curriculum:</strong> ' . $user['curriculum'] . '</p>';
            echo '    <p class="mb-4"><strong>Dirección:</strong> ' . $user['direccion'] . '</p>';
            echo '    <p class="mb-4"><strong>Ciudad:</strong> ' . $user['ciudad'] . '</p>';
            echo '    <p class="mb-4"><strong>Correo Electrónico:</strong> ' . $user['correoElectronico'] . '</p>';
            echo '    <p class="mb-4"><strong>Nombre Usuario:</strong> ' . $user['nombreUsuario'] . '</p>';
            echo '    <p class="mb-4"><strong>Contraseña:</strong> ' . $user['contraseña'] . '</p>';
            echo '    <p class="mb-4"><strong>Valoración:</strong> ' . $user['valoracion'] . '</p>';
            echo '  </div>';
            echo '</div>';
        }
    }

}
    function drawUser($user)
    {
        echo '<div class="container-fluid mt-5 d-md-flex justify-content-center" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); background-color: #f5f5f5; color: black; border-radius: 10px;">';
        echo '  <div class="col-md-6 d-flex align-items-center justify-content-center">';
        echo '    <div style="padding: 20px; border-radius: 10px;">';
        echo '      <img src="/img/temporada1.jpg" alt="Amazon Prime Video" class="img-fluid rounded" width="400" height="400">';
        echo '      <p class="text-center mt-3" style="font-size: 20px;">' . $user['nombreCompleto'] . '</p>';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="col-md-6 px-5">';
        echo '    <p class="mb-4"><strong>DNI:</strong> ' . $user['dni'] . '</p>';
        echo '    <p class="mb-4"><strong>Nombre Completo:</strong> ' . $user['nombreCompleto'] . '</p>';
        echo '    <p class="mb-4"><strong>Número Seguridad Social:</strong> ' . $user['numeroSeguridadSocial'] . '</p>';
        echo '    <p class="mb-4"><strong>Curriculum:</strong> ' . $user['curriculum'] . '</p>';
        echo '    <p class="mb-4"><strong>Dirección:</strong> ' . $user['direccion'] . '</p>';
        echo '    <p class="mb-4"><strong>Ciudad:</strong> ' . $user['ciudad'] . '</p>';
        echo '    <p class="mb-4"><strong>Correo Electrónico:</strong> ' . $user['correoElectronico'] . '</p>';
        echo '    <p class="mb-4"><strong>Nombre Usuario:</strong> ' . $user['nombreUsuario'] . '</p>';
        echo '    <p class="mb-4"><strong>Contraseña:</strong> ' . $user['contraseña'] . '</p>';
        echo '    <p class="mb-4"><strong>Valoración:</strong> ' . $user['valoracion'] . '</p>';
        echo '  </div>';
        echo '</div>';
    }



?>