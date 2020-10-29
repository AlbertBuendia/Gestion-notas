<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
  require_once '../model/admin.php';
  session_start();
  if (!isset($_SESSION['email_administrador'])) {
      header('Location:./index.php');
  }
  echo '<h1>Bienvenido</h1>';  
  echo '<h2><a href="../index.php">Logout</a></h2>';
  echo '<br>';
    include '../model/alumnoDAO.php';
    if (isset($_POST['crea'])){
        $insertar_alu=new AlumnoDAO;
        $insertar_alu->insertar();
    }
  ?>
  <form action="./insertar_alumnos.php" method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="Escribe el nombre..."><br><br>
  <label for="apellido1">Primer apellido:</label><br>
  <input type="text" id="apellido1_alumno" name="apellido1_alumno" placeholder="Escribe el primer apellido..."><br><br>
  <label for="apellido2">Segundo apellido:</label><br>
  <input type="text" id="apellido2_alumno" name="apellido2_alumno" placeholder="Escribe el segundo apellido..."><br><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email_alumno" name="email_alumno" placeholder="Email..."><br><br>
  <label for="passwd">Password:</label><br>
  <input type="password" id="passwd_alumno" name="passwd_alumno" placeholder="Password..."><br><br>
  <input type="submit" value="Submit" name="crea">
  <br><br>
  <a href="../model/admin_page.php">Volver</a>

</form>
</body>
</html>