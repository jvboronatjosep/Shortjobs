<?php

require_once "autoloader.php";

class Importar extends Conexion
{

    public function __construct($confFile)
    {
        parent::__construct($confFile);
    }



   public function importarEmpresa($fileEmpresa)
    {
        $conn = $this->connect();
        if (($handle = fopen($fileEmpresa, "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
               
                $tema= $data[0];
                $nombre = $data[1];
                $sedes = $data[2];


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