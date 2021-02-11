<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/styles.css">

    <title>¡Ya estas inscrito!</title>
</head>
<body>
<header class="header index">
    <div class="logo">Zombie Help Run</div>
    <div class="topnav">
    <a href="{{url('/')}}">Inicio</a>
        <a href="#">¡ZOMBIES!</a>
        <a href="#">Clasificaciones</a>
        <a href="{{url('inscripcion')}}">Inscripciones. Sí, otra vez. </a>
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
    
    <div class=inscripcion>Inscripción</div>
<div class=ayuntamiento>Ayuntamiento local</div>
  </header>


</body>
</html>