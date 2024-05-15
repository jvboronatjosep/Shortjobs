<?php

class Trabajos extends Conexion {

    public function __construct($confFile){
        parent::__construct($confFile);
    }

    public function getTrabajos(){
        $conn = $this->connect();
        $sql = "SELECT nombre FROM Juegos"; 
        $result = $conn->query($sql);
        $games = [];
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $games[] = $row;
            }
        }
        return $games;
    }
    
    

    
    public function drawGames($games){
        echo '<table>';
        echo '<tr><th>Juego</th></tr>';
        foreach ($games as $game){
            echo '<tr>';
            echo '<td>' . $game['nombre'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    
}
?>