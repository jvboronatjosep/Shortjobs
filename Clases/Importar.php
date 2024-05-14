<?php

require_once "Conexion.php";

class Importar extends Conexion
{

    public function __construct($confFile)
    {
        parent::__construct($confFile);
    }



   public function importarEmpresa($fileSeries)
    {
        $conn = $this->connect();
        if (($handle = fopen($fileSeries, "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                $id = $data[0];
                $tema = $data[1];
                $nombre = $data[2];
                $sedes = $data[3];
            


                $sql = "INSERT INTO empresas (tema, nombre, sedes) VALUES ('$tema', '$nombre', '$sedes')";
        
              
                if (!$conn->query($sql)) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            fclose($handle);
        }
        $result = $conn->query($sql);
        if ($result) {
            return "File imported successfully";
        } else {
            return "Error importing file";
        }
    }
    
    

}

?>