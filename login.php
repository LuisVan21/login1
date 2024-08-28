<?php 
  
    if($_SERVER['REQUEST_METHOD']==="POST"){

        include("conexion.php");

        echo '<pre>', var_dump($_POST), '</pre>';

        $email=(isset($_POST['email']))?htmlspecialchars($_POST['email']):NULL;
        $password=(isset($_POST['password']))?$_POST['password']: NULL;


        $sql= "SELECT  `email` FROM `usuarios` WHERE email=:email ";
        $sentencia= $pdo->prepare($sql); 

        $sentencia->execute(['email'=>$email]);

        $usuario=$sentencia->fetch(PDO::FETCH_ASSOC);

        echo '<pre>', var_dump($usuario), '</pre>';

    }

  ?>