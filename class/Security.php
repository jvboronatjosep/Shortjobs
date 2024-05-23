<?php
class Security extends Conexion
{
    private $loginPageUser = "inicioSesionU.php";
    private $loginPageEmpresa = "inicioSesionE.php";
    private $homePageUser = "inicioTrabajador.php";
    private $homePageEmpresas = "inicioEmpresa.php";
    public function __construct()
    {
        parent::__construct();
        session_start();
       
    }

    public function checkLoggedIn()
    {
        if (!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]) {
            header("Location: " . $this->loginPage);
        }
    }

    public function doLoginUser()
    {
        if (count($_POST) > 0) {
            
            
            $user = $this->getUser($_POST["userName"]);
            $_SESSION["loggedIn"] = $this->checkUser($user, $_POST["userPassword"]) ? $user["nombreUsuario"] : false;
            if ($_SESSION["loggedIn"]) {
                $this->redirectUser();
            } else {
                return "Incorrect User Name or Password";
            }
            
        } else {
            return null;
        }
    }

    public function doLoginEmpresa()
    {
        if (count($_POST) > 0) {
            
            
            $comp = $this->getEmpresa($_POST["empresaName"]);
            $_SESSION["loggedIn"] = $this->checkEmpresa($comp, $_POST["empresaPassword"]) ? $comp["nombre"] : false;
            if ($_SESSION["loggedIn"]) {
                $this->redirectEmpresa();
            } else {
                return "Incorrect User Name or Password";
            }
            
        } else {
            return null;
        }
    }

    public function redirectUser(){
        header("Location: inicioTrabajador.php");
    }

    public function redirectEmpresa(){
        header("Location: inicioEmpresa.php");
    }

    public function getUserData(){
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            return $_SESSION["loggedIn"];
        }
    }

    private function checkUser($user, $userPassword)
    {
        if ($user) {
            return $this->checkPasswordUser($user["contraseña"], $userPassword);
           
        } else {
            return false;
        }
    }

    private function checkEmpresa($comp, $empresaPassword)
    {
        if ($comp) {
            return $this->checkPasswordEmpresa($comp["contraseña"], $empresaPassword);
           
        } else {
            return false;
        }
    }

    private function checkPasswordUser($securePassword, $userPassword)
    {
        return ($userPassword == $securePassword);
        //return ($userPassword === $securePassword);
    }

    private function checkPasswordEmpresa($securePassword, $empresaPassword)
    {
        return ($empresaPassword == $securePassword);
        //return ($userPassword === $securePassword);
    }

    private function getUser($userName)
    {
        $sql = "SELECT * FROM usuarios WHERE nombreUsuario = '$userName'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    private function getEmpresa($empresaName)
    {
        $sql = "SELECT * FROM empresas WHERE nombre = '$empresaName'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}
