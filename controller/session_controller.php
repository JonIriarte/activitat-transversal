<?php 
require_once '../model/administrador.php';
session_start();
if (!isset($_SESSION['email_administrador'])) {
   //REDIRIGIR A ALGÚN SITIO COMO ZONA.ADMIN?

    // header('Location:../view/zona.admin.php');
}
echo '<div style="margin-right:2%"><h1 style="text-align: right; margin-top: 3%;">ADMINISTRACION'.'</h1><h2 style="text-align: center; background-color: grey; border: 2px solid black; width: 15%; border-radius: 30px; margin-left: 75%"><a href="../controller/logout_controller.php">Cerrar Sesión</a></h2></div>';

?>




<!-- ¿Dónde se va a logear? En el mismo sitio estaría guay, pero no sé si es posible o no