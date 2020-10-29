<?php
include '../model/connection.php';
try {
	$stmt=$pdo->prepare("INSERT INTO tbl_alumno (`id_alumno`,`nombre_alumno`,`apellido1_alumno`,`apellido2_alumno`, `email_alumno`, `passwd_alumno`) VALUES (NULL, ?, ?, ?, ?, ?);");
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
		header("Location:../model/admin_page.php");
} catch (Exception $e){
	$pdo->rollback();
	echo $e->getMessage();
}



?>