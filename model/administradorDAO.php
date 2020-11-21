<?php
//DAO=Data Access Object
require_once 'administrador.php';
class AdministradorDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM administrador WHERE `email_admin`=? AND `password_admin`=?";
        $sentencia=$this->pdo->prepare($query);
        $nombre=$user->getNombre();//falta el getNombre
        $password=$user->getPassword();//falta el getPasswd
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$passwd);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        echo $numRow;
        if(!empty($numRow) && $numRow==1){
            //Creamos la sesión
            $user->setIdAdministrador($result['id_administrador']);//coge el id del camarero
            session_start();
            $_SESSION['id_admin']=$user;//coge el nombre del camarero para mostrarlo en la página una vez realizado el login.
            return true;
        } else {
            return false;
        }
    }
}

?>