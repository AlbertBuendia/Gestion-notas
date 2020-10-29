<?php  
require_once 'alumno.php';
class AlumnoDao{
    private $pdo;

    public function __construct(){
	}
	
    public function mostrar(){
		include 'connection.php';
		
    	$sql="SELECT * FROM tbl_alumno";
		$sentencia=$pdo->prepare($sql);
		$sentencia->execute();

		$lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);

		foreach ($lista_alumno as $alumno) {
			$id=$alumno["id_alumno"]." ";
			echo "<a href='modificar_alumno.php?id={$id}'>Modificar</a>"." ";
			echo "<a href='admin_page.php?id_alumno={$id}'>Eliminar</a>"." ";
			echo "{$alumno['nombre_alumno']} , ";
			echo "{$alumno['apellido1_alumno']} , ";
			echo "{$alumno['apellido2_alumno']}<br>";
    }
   }
   
    public function insertar(){
    	try {
			include 'connection.php';
			
			$stmt=$pdo->prepare("INSERT INTO tbl_alumno (`id_alumno`,`nombre_alumno`,`apellido1_alumno`,`apellido2_alumno`, `email_alumno`, `passwd_alumno`) VALUES (NULL, ?, ?, ?, ?, ?);")	;
			$nombre=$_POST['nombre_alumno'];
			$apellido1=$_POST['apellido1_alumno'];
			$apellido2=$_POST['apellido2_alumno'];
			$email=$_POST['email_alumno'];
			$passwd=md5($_POST['passwd_alumno']);
			$stmt->bindParam(1,$nombre);
			$stmt->bindParam(2,$apellido1);
			$stmt->bindParam(3,$apellido2);
			$stmt->bindParam(4,$email);
			$stmt->bindParam(5,$passwd);
			$stmt->execute();
			header("Location: ../model/admin_page.php");
		} catch (Exception $e){
			$pdo->rollback();
			echo $e->getMessage();
		}
	}

	public function filtros(){
		include 'connection.php';

    	$query1="SELECT * FROM tbl_alumno WHERE nombre_alumno LIKE '%{$_POST['nombre_alumno']}%' AND apellido1_alumno LIKE '%{$_POST['apellido1_alumno']}%'";
		$sentencia=$pdo->prepare($query1);
		$sentencia->execute();

		$lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);

		foreach ($lista_alumno as $alumno) {
			$id=$alumno["id_alumno"]." ";
			echo "<a href='modificar_alumno.php?id={$id}'>Modificar</a>"." ";
			echo "<a href='admin_page.php?id_alumno={$id}'>Eliminar</a>"." ";
			echo "{$alumno['nombre_alumno']} , ";
			echo "{$alumno['apellido1_alumno']} , ";
			echo "{$alumno['apellido2_alumno']}<br>";
    	}
   	}
	
	public function borrar(){
		include 'connection.php';

		try {
			$pdo->beginTransaction();
			$id=$_GET['id_alumno'];

			$query = "SELECT * FROM `tbl_nota` WHERE `id_alumno` = ?";
			$sentencia=$pdo->prepare($query);
			$sentencia->bindParam(1,$id);
			$sentencia->execute();
			$lista_notas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		
			if ($lista_notas!="") {
				$query="DELETE FROM `tbl_alumno` WHERE `id_alumno` = ?";
				$sentencia=$pdo->prepare($query);
				$sentencia->bindParam(1,$id);
				$sentencia->execute();
			} else {
				$query="DELETE FROM `tbl_nota` WHERE `id_alumno` = ?";
				$sentencia=$pdo->prepare($query);
				$sentencia->bindParam(1,$id);
				$sentencia->execute();

				$query="DELETE FROM `tbl_alumno` WHERE `id_alumno` = ?";
				$sentencia=$pdo->prepare($query);
				$sentencia->bindParam(1,$id);
				$sentencia->execute();
			}

		$pdo->commit();
		header("Location: admin_page.php");

		} catch (Exception $e) {
			$pdo->rollBack();
			echo $e;
		}
	}	   

}

	  
	  
