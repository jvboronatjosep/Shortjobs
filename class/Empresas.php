<?php


require_once "autoloader.php";
class Empresas extends Conexion
{
    public function __construct($confFile)
    {
        parent::__construct($confFile);
    }

    public function getEmpresas()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM empresas";
        $result = $conn->query($sql);
        $empresas = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $empresas[] = $row;
            }
        }
        return $empresas;
    }
    

    public function getEmpresaById($id)
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM empresas WHERE id = '$id'";
        $result = $conn->query($sql);
        $trabajo = null;
        if ($result->num_rows > 0) {
            $trabajo = $result->fetch_assoc();
        }
        return $trabajo;
    }

    public function drawEmpresas($empresas)
    {
    
        foreach ($empresas as $empresa) { 
            echo '<div class="container-fluid mt-5 d-md-flex justify-content-center" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); background-color: #f5f5f5; color: black; border-radius: 10px;">';
            echo '  <div class="col-md-6 d-flex align-items-center justify-content-center">';
            echo '    <div style="padding: 20px; border-radius: 10px;">';
            echo '      <img src="/img/temporada1.jpg" alt="Amazon Prime Video" class="img-fluid rounded" width="400" height="400">';
            echo '      <p class="text-center mt-3" style="font-size: 20px;">' . $empresa['tema'] . '</p>'; 
            echo '    </div>';
            echo '  </div>';
            echo '  <div class="col-md-6 px-5">';
            echo '    <p class="mb-4">' . $empresa['nombre'] . '</p>'; 
            echo '    <p class="mb-4">Tipo: ' . $empresa['sedes'] . '</p>'; 
            echo '  </div>';
            echo '</div>';
        }
    }

    public function drawEmpresa($empresa)
    {
        echo '<div class="container-fluid mt-5 d-md-flex justify-content-center" style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); background-color: #f5f5f5; color: black; border-radius: 10px;">';
        echo '  <div class="col-md-6 d-flex align-items-center justify-content-center">';
        echo '    <div style="padding: 20px; border-radius: 10px;">';
        echo '      <p class="text-center mt-3" style="font-size: 20px;">' . $empresa['tema'] . ' </p>';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="col-md-6 px-5">';
        echo '    <p class="mb-4">' . $empresa['nombre'] . '</p>'; // Modificado 'tema' a 'descripcion'
        echo '    <p class="mb-4">Tipo: ' . $empresa['sedes'] . '</p>'; // Modificado 'sedes' a 'tipo'
        echo '  </div>';
        echo '</div>';
    }
}

?>