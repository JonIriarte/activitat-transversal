<?php 
require_once 'config.php';
try {
    $dsn = "mysql:host=".SERVIDOR.";dbname=".BD;
    $pdo = new PDO($dsn, USER, PASSWORD);
    /*echo "<script> alert('Conexión establecida') </script>";*/
    $pdo->exec("SET CHARACTER SET utf8");   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    echo $e->getMessage();
}
?>