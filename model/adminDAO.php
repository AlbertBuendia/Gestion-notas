<?php
require_once 'admin.php';
class AdministradorDAO{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM tbl_administrador WHERE email_administrador=? AND passwd_administrador=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$user->getEmailAdministrador();
        $passwd=$user->getPasswdAdministrador();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$passwd);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        echo $numRow;
        if(!empty($numRow) && $numRow==1){
            $user->setIdAdministrador($result['id_administrador']);
            session_start();
            $_SESSION['email_administrador']=$user;
            return true;
        }else {
            return false;
        }
    }
}

?>