<?php  
require_once 'notas.php';
class notasDAO{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function notas(){
        $id=$_GET['id_alumno'];
        $query="SELECT * from tbl_notas WHERE id_alumno=?";
    }
}