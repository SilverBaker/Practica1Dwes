<?php

class BD {

    private $connectionString;
    private $user;
    private $password;
    static $bd;

    public function __construct($connectionString, $user, $password) {
        $this->connectionString = $connectionString;
        $this->user = $user;
        $this->password = $password;
    }

    public function probarConexion() {
        try {
            BD::$bd = new PDO($this->connectionString, $this->user, $this->password);
            return true;
        } catch (Exception $ex) {
            return false;
        }
    }

    public function login() {
        $param = [
            filter_input(INPUT_POST, "clave"),
            filter_input(INPUT_POST, "usuario")
        ];
        //$consult = $this->bd->prepare("select * from usuarios where Nombre=?");
        //$consult->execute(array($param[1]));
        //if ($consult->rowCount() >= 1) {
            $consult = BD::$bd->prepare("select Nombre,Rol from usuarios where Clave = ? && Nombre = ?");
            $consult->execute($param);
            if ($consult->rowCount() === 1) {
                foreach($consult as $row){
                    $_SESSION["user"]=$row["Nombre"];
                    $_SESSION["rol"]=$row["Rol"];
                    header("location:index.php");
                }
            } else {
                echo "Usuario o contraseña incorrectos";
            }
        //} else {
        //    echo 'usuario inexistente';
        //}
    }

}
