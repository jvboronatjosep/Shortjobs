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
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title"> ' . $job['nombre'] . '</h5>';
            echo '<p class="card-text">Tipo: ' . $job['tipo'] . '</p>';
            echo '<p class="card-text">Empresa: ' . $job['empresa'] . '</p>';
            echo '<p class="card-text">Descripcion: ' . $job['descripcion'] . '</p>';
            echo '<p class="card-text">Ubicacion: ' . $job['ubicacion'] . '</p>';
            echo '<p class="card-text">Fecha: ' . $job['fecha'] . '</p>';
            echo '<p class="card-text">Salario: ' . $job['salario'] . '</p>';
            echo '<p class="card-text">Duración: ' . $job['duracion'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    }


}
?>