<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	require_once '../controller/session_controller.php';
?>
<button><a href="../view/insertar_alumnos.php">Crear alumnos</button></a><br><br><br>
<form action="admin_page.php" method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="Nombre"><br><br>
  <label for="apellido1">1er apellido:</label><br>
  <input type="text" id="apellido1_alumno" name="apellido1_alumno" placeholder="Apellido Paterno"><br><br>
<input type="submit" value="Filtrar" name="filtro"><br><br>
<?php
	include 'alumnoDAO.php';
	if (isset($_GET['id_alumno'])) {
		$borrar_alu = new AlumnoDAO;;
		$borrar_alu->borrar();
	}
	if (empty($_POST['filtro'])){
		$mostrar_alu=new AlumnoDAO;
		echo $mostrar_alu->mostrar();
	} else if (empty($_POST['nombre_alumno']) && empty($_POST['apellido1_alumno'])) {
    	$mostrar_alu=new AlumnoDAO;
		echo $mostrar_alu->mostrar();
	} else if (isset($_POST['nombre_alumno']) || isset($_POST['apellido1_alumno'])){
        $filtros_alu=new AlumnoDAO;
        $filtros_alu->filtros();
 	}
?>
</body>
</html>