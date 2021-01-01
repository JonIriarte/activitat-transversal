<?php
include '../model/connection.php';
//Calcular la categoría
$fecha=$_POST['fecha_nac']; 
$categoria=calcularCategoria($fecha); 
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
        //Falta la inscripción del participante y registarlo en inscripción.  La categoria se recoge en $categoria y hay que recoger el ID de la carrera. 
        $sentencia->execute();
        //Inserción de la inscripción del participante
        $query2="INSERT INTO `inscripcion`(`pago_insc`, `dorsal_insc`, `id_edic`, `id_part`, `id_cat`) VALUES (1,1,
        (SELECT id_edic FROM edicion WHERE finalizada_edic = 0),
        (SELECT id_part FROM participante WHERE dni_part = '{$dni}'),
        (SELECT id_cat from categoria WHERE id_cat={$categoria}))";  
        $sentencia2=$pdo->prepare($query2);
        $sentencia2->execute();
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
function calcularCategoria($fecha){
    $fecha; 
    $ahoraUNIX=time();
    $fechaUNIX=strtotime($fecha); 
    $restante=$ahoraUNIX-$fechaUNIX;
    $dias=$restante/86400; 
    $fecha=floor($dias/365); 
    if ($fecha>51){
        $categoria=5; 
    }else if($fecha >19){
        $categoria=4; 
    }else if($fecha>14){
        $categoria=3; 
    }else if ($fecha>7) {
        $categoria=2; 
    }else{
        $categoria=1; 
    }
    //¿Tengo que devolver categoria?
    return $categoria; 
    }