<?php
    class Conexion {
        public $conn;

        private $host;
        private $username;
        private $password;
        private $database;

        public function __construct() {

            $config = $this->parseConfFile();
            $this->host = $config['host'];
            $this->username = $config['username'];
            $this->password = $config['password'];
            $this->database = $config['database'];
            $this->conn = $this->connect();
        }

        private function parseConfFile() {
            $config = [];
            if (($handle = fopen("./conf.csv", "r")) !== false) {
                while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                    $config['host'] = $data[0];
                    $config['username'] = $data[1];
                    $config['password'] = $data[2];
                    $config['database'] = $data[3];
                }
                fclose($handle);
            }
            return $config;
        }

        public function connect() {

            $conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }
            return $conn;
        }

        public function getConn() {
            return $this->conn;
        }
    }

?>