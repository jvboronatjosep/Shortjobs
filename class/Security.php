<?php
class Security extends Conexion
{
    private $loginPageUser = "inicioSesionU.php";
    private $loginPageEmpresa = "inicioSesionE.php";
    private $homePage = "inicioTrabajador.php";
    public function __construct()
    {
        parent::__construct();
       
    }

    public function checkLoggedIn()
    {
        if (!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]) {
            header("Location: " . $this->loginPage);
        }
    }

    public function doLogin()
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

    public function redirectUser(){
        
            # code...
            header("Location: inicioTrabajador.php");
        
    }

    public function getUserData(){
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            return $_SESSION["loggedIn"];
        }
    }

    private function checkUser($user, $userPassword)
    {
        if ($user) {
            return $this->checkPassword($user["contraseña"], $userPassword);
           
        } else {
            return false;
        }
    }

    private function checkPassword($securePassword, $userPassword)
    {
        return ($userPassword == $securePassword);
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
    private function getEmprese($empresaName)
    {
        $sql = "SELECT * FROM empresas WHERE nombre = '$empresaName'";
        $result =  parent::conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}
