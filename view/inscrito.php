<?php
include '../model/connection.php';
$zombie; 
//Para reconocer si el checkbox zombie está en true: 
if( !empty($_POST['zombie']) ) {
    $zombie=true;
}
else {
    $zombie=false;
}
if (isset($_POST['nombre'])
 && isset($_POST['apellido1'])
 && isset($_POST['fecha_nac'])
 && isset($_POST['email'])
 && isset($_POST['genero'])
 && isset($_POST['dni'])){
    
    try {
        //Comienza la transacción
        $pdo->beginTransaction(); 
        $query="INSERT INTO `participante` (`nom_part`,`apellido1_part`, `edad_part`, `email_part`, `genero_part`,`zombie_part`,`dni_part`) VALUES (?,?,?,?,?,?,?);";
        $sentencia=$pdo->prepare($query);
        $nombre=$_POST['nombre']; 
        $apellido1=$_POST['apellido1']; 
        $edad=$_POST['fecha_nac']; 
        $email=$_POST['email'];
        $genero=$_POST['genero']; 
        $dni=$_POST['dni']; 
        $sentencia->bindParam(1,$nombre);
        $sentencia->bindParam(2,$apellido1);
        $sentencia->bindParam(3,$edad);
        $sentencia->bindParam(4,$email);
        $sentencia->bindParam(5,$genero);
        $sentencia->bindParam(6,$zombie);
        $sentencia->bindParam(7,$dni);
        //Falta la inscripción del participante registarlo en inscripción.  
        //Antes debería recoget el valor de la categoría y calcularlo en el JS
        $id_persona = $pdo->lastInsertId();
        $sentencia->execute();
        $query2="INSERT INTO inscripcion ()"; 
        echo "todo bien";
        //hacer todas las sentencias a la vez
        $pdo->commit();
        
    } catch (Exception $ex) {
       // Reconocer un error y no hacer los cambios 
        $pdo->rollback();
        echo $ex->getMessage();
    }
}else{
    //Por que puede que los duendes de la informática me hagan una de las suyas y todo se vaya al carajo: 
    header('Location:../index.php'); 
}
