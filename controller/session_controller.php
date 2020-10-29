<?php 
require_once '../model/admin.php';
session_start();
if (!isset($_SESSION['email_administrador'])) {
    header('Location:./index.php');
}
echo '<h1>Bienvenido</h1>';  
echo '<h2><a href="../index.php">Logout</a></h2>';
echo '<br>';
?>