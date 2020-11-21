<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <lang="es">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../js/code.js"></script>     
    </head>
<body>
  <header class="header">
      <div class="logo">Zombie Help Run</div>
        <div class="topnav">
            <a href="../index.php">Inicio</a>
            <a href="#">¡ZOMBIES!</a>
            <a href="#">Clasificaciones</a>
            <a href="#">Avisos y noticias</a>
            <a href="#">Enlaces</a>
            <div class="languageSelector"> 
                <label for="language">Idioma</label>
                <select id="language" name="language">
                <option value="castellano">Castellano</option>
                <option value="catalan">Català</option>
                <option value="ingles">English</option>
            </select>
            <input type="submit" value="Enviar">
        </div>
      </div>
      <h2>Inscripción</h2>
      <form action="./inscrito.php" method="POST" onsubmit="return validarFor()">
        <div>
          <p>DNI:</p><input type="text" id="dni" name="dni" class ="data" Placeholder="DNI"><br>
          <p>Nombre y apellido(s)</p><input type="text" id="nombre" name="nombre" class ="data" Placeholder="Nombre"  >
          <p>Fecha de nacimiento</p><input type="date" id="fecha_nac" name="fecha_nac" class ="data" Placeholder="Fecha de nacimiento: DD/MM/AAAA" ><br>
          <p>Dirección de eMail</p><input type="email" id="email" name="email" class ="data" Placeholder="eMail" ><br>
        </div>
        <br>
        <p>Género</p>
        <select input type="select" name="genero" class ="data">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
        <br>
        <p>Haga click en la siguiente casilla si su estado vital es de zombie</p>
        <input type ="checkbox" id="zombie" name="zombie">
        <label for="zombie">Sí, soy un zombie.</label><br><br>
        <input type="submit" value="Registrarse">
        <p id="message"></p>
      </form> 
  </header>
</body>
</html>
