<?php
include '../model/administrador.php';
if (isset($_POST['email'])) {
    $administrador = new Administrador($_POST['email'], md5($_POST['password']),$_POST['id'],);
    if($camareroDAO->login($camarero)){
        echo 'perfect';
        // establecer sesiones
        // redirección a la zona de administración mesas
        header('Location: ../view/zona.admin.php');
    }else {
       header('Location: ../view/login.php');//sino está bien hecho el login volvemos a la página de login.
        //echo "fallo";
    }
} else {
   header('Location: ../view/login.php');
    //echo "no entra en el primer if";
}