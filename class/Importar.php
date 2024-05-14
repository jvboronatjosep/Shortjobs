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
                $tema = $data[0];
                $nombre = $data[1];
                $sedes = $data[2];

                $sql = "INSERT INTO empresas (tema, nombre, sedes) VALUES ('$tema', '$nombre', '$sedes')";
                if (!$conn->query($sql)) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            fclose($handle);
        } else {
            return "Error opening file";
        }
        return "File imported successfully";
    }

    public function importarUsuarios($fileUsuarios)
    {
        $conn = $this->connect();
        if (($handle = fopen($fileUsuarios, "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                $dni = $data[0];
                $nombreCompleto = $data[1];
                $numeroSeguridadSocial = $data[2];
                $curriculum = $data[3];
                $direccion = $data[4];
                $ciudad = $data[5];
                $correoElectronico = $data[6];
                $nombreUsuario = $data[7];
                $contraseña = $data[8];

                $sql = "INSERT INTO usuarios (dni, nombreCompleto, numeroSeguridadSocial, curriculum, direccion, ciudad, correoElectronico, nombreUsuario, contraseña) VALUES ('$dni', '$nombreCompleto', '$numeroSeguridadSocial', '$curriculum', '$direccion', '$ciudad', '$correoElectronico', '$nombreUsuario', '$contraseña')";
                if (!$conn->query($sql)) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            fclose($handle);
        } else {
            return "Error opening file";
        }
        return "File imported successfully";
    }

    public function importarTrabajos($fileTrabajos)
    {
        $conn = $this->connect();
        if (($handle = fopen($fileTrabajos, "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                $tipo = $data[0];
                $empresa = $data[1];
                $descripcion = $data[2];
                $ubicacion = $data[3];
                $fecha = $data[4];
                $salario = $data[5];
                $duracion = $data[6];


                $sql = "INSERT INTO trabajos (tipo, empresa, descripcion, ubicacion, fecha, salario, duracion) VALUES ('$tipo', '$empresa', '$descripcion', '$ubicacion', '$fecha','$salario', '$duracion')";
                if (!$conn->query($sql)) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            fclose($handle);
        } else {
            return "Error opening file";
        }
        return "File imported successfully";
    }
}

?>