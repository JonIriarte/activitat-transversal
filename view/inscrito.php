<?php
include '../model/connection.php';
$zombie; 
if( !empty($_POST['zombie']) ) {
    $zombie=true;
}
else {
    $zombie=false;
}
if (isset($_POST['nombre'])
 && isset($_POST['fecha_nac'])
 && isset($_POST['email'])
 && isset($_POST['genero'])
 && isset($_POST['dni'])){
    try {
        //Comienza la transacción
        $pdo->beginTransaction(); 
        $query="INSERT INTO `participante` (`nom_part`, `edad_part`, `email_part`, `genero_part`,`zombie_part`,`dni_part`) VALUES (?,?,?,?,?,?);";
        $sentencia=$pdo->prepare($query);
        $nombre=$_POST['nombre']; 
        $edad=$_POST['fecha_nac']; 
        $email=$_POST['email'];
        $genero=$_POST['genero']; 
        $zombie; 
        $dni=$_POST['dni']; 
        $sentencia->bindParam(1,$nombre);
        $sentencia->bindParam(2,$edad);
        $sentencia->bindParam(3,$email);
        $sentencia->bindParam(4,$genero);
        $sentencia->bindParam(5,$zombie);
        $sentencia->bindParam(6,$dni);
        $sentencia->execute();
        echo "todo bien";
        //hacer todas las sentencias a la vez
        $pdo->commit();
        
    } catch (Exception $ex) {
       // Reconocer un error y no hacer los cambios 
        $pdo->rollback();
        echo $ex->getMessage();
    }
}else{
    //header('Location:../index.php'); 
    echo "else"; 
}
/*
try {

    //Comienza la transacción
    $pdo->beginTransaction(); 
    $query="INSERT INTO `inscripcion` (`nom_part`, `apellido1`, `apellido2`, `email`,``) VALUES (NULL,?,?,?);";
    $sentencia=$pdo->prepare($query);
    $nombre=$_POST['name']; 
    $pas=$_POST['pass']; 
    $email=$_POST['email']; 
    $sentencia->bindParam(1,$nombre);
        $sentencia->bindParam(2,$pas);
        $sentencia->bindParam(3,$email);
        $sentencia->execute();
     $sentencia1->execute();
    echo "todo bien";
    //hacer todas las sentencias a la vez
    $pdo->commit();
} catch (Exception $ex) {
    /* Reconocer un error y no hacer los cambios 
    $pdo->rollback();
    echo $ex->getMessage();
   
}
*/