<?php 

    session_start();
    if(!isset($_SESSION["usuario_id"])){
        header("Location:logion.html");
        exiit();
    }

    echo '<pre>', var_dump($_SESSION), '</pre>';
  
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="https://cursos.develoteca.com">Plataforma Educativa</a>
    |
    <a href="https://www.youtube.com/develoteca">YouTube</a>
    |
    <a href="cerrar.php">Cerrar</a>
    <br/>
    <h2>Inicio de la aplicacion</h2>
    <p>bienvenid@ <?php echo $_SESSION["usuario_nombre"]." ".$_SESSION["usuario_apellido"]; ?></p>
    <p>este es el inicio de la aplicacion</p>
    
</body>
</html>

