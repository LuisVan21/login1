<?php 

    session_start();
    if(!isset($_SESSION["usuario_id"])){
        header("Location:logion.html");
        exit();
    }

    // echo '<pre>', var_dump($_SESSION), '</pre>';
  
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_style.css">
    <title>Document</title>
</head>
<body>

    <nav class="menu">
        <ul>
        <a href="https://cursos.develoteca.com">Plataforma Educativa</a>
        
        <a href="https://www.youtube.com/develoteca">YouTube</a>
        
        <a href="cerrar.php">Cerrar</a>
        </ul>
    </nav>
    <!-- usuario_apellido -->
    
    <main class="main_container">
    <h2 class="title">Inicio de la aplicacion</h2>
    <p>bienvenid@: <span class="name_user"><?php echo " ".$_SESSION["usuario_apellido"]; ?></span></p>
    <p class="app_start">este es el inicio de la aplicacion</p>
    
    </main>
</body>
</html>

