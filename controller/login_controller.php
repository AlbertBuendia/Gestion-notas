<?php
include '../model/admin.php';
include '../model/adminDAO.php';
if (isset($_POST['email_administrador'])) {
    $user = new Administrador($_POST['email_administrador'], md5($_POST['passwd_administrador']));
    $userDAO = new AdministradorDAO();
    if($userDAO->login($user)){
        echo 'perfect';
        header('Location: ../model/admin_page.php');
    }else {
        header('Location: ../index.php');
        echo "fallo";
    }
}else {
    header('Location: ../index.php');
}