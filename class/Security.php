<?php
class Security extends Conexion
{
    private $loginPageUser = "inicioSesionU.php";
    private $loginPageEmpresa = "inicioSesionE.php";
    private $homePageUser = "inicioTrabajador.php";
    private $homePageEmpresa = "inicioEmpresa.php";
    private $nose = "empresa-usuario.php";

    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function checkLoggedIn($userType = 'user')
    {
        if (!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]) {
            if ($userType === 'empresa') {
                header("Location: " . $this->nose);
            } else {
                header("Location: " . $this->nose);
            }
            exit();
        }
    }

    public function doLoginUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
            $user = $this->getUser($_POST["userName"]);
            if ($this->checkUser($user, $_POST["userPassword"])) {
                $_SESSION["loggedIn"] = $user["nombreUsuario"];
                $_SESSION["userType"] = 'user';
                $this->redirectUser();
                exit();
            } else {
                return "Incorrect User Name or Password";
            }
        }
        return null;
    }

    public function doLoginEmpresa()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
            $empresa = $this->getEmpresa($_POST["empresaName"]);
            if ($empresa === false) {
                return "Company not found";
            }
            if ($this->checkEmpresa($empresa, $_POST["empresaPassword"])) {
                $_SESSION["loggedIn"] = $empresa["nombre"];
                $_SESSION["userType"] = 'empresa';
                $this->redirectEmpresa();
                exit();
            } else {
                return "Incorrect Company Name or Password";
            }
        }
        return null;
    }

    public function redirectUser()
    {
        header("Location: " . $this->homePageUser);
        exit();
    }

    public function redirectEmpresa()
    {
        header("Location: " . $this->homePageEmpresa);
        exit();
    }

    public function getUserData()
    {
        return $_SESSION["loggedIn"] ?? null;
    }

    private function checkUser($user, $userPassword)
    {
        return $user && $this->checkPassword($user["contraseña"], $userPassword);
    }

    private function checkEmpresa($empresa, $empresaPassword)
    {
        return $empresa && $this->checkPassword($empresa["contraseña"], $empresaPassword);
    }

    private function checkPassword($storedPassword, $inputPassword)
    {
        return $storedPassword === $inputPassword; // Considera usar password_hash y password_verify para mayor seguridad
    }

    private function getUser($userName)
    {
        $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE nombreUsuario = ?");
        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0 ? $result->fetch_assoc() : false;
    }

    private function getEmpresa($empresaName)
    {
        $stmt = $this->conn->prepare("SELECT * FROM empresas WHERE nombre = ?");
        $stmt->bind_param("s", $empresaName);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0 ? $result->fetch_assoc() : false;
    }
}
