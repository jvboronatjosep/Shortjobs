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

    
    

    
    



}
?>