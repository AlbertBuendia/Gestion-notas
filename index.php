<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="./JS/code.js"></script>
</head>
<body>
  <form action="./controller/login_controller.php" method="POST" onsubmit="return validacionForm()">
  <label for="email">Email:</label><br>
  <input type="email" id="email_administrador" name="email_administrador" placeholder="Pon tu email..."><br>
  <label for="passwd">Password:</label><br>
  <input type="password" id="passwd_administrador" name="passwd_administrador" placeholder="Escribe tu password..."><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>