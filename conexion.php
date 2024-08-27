<?php 
    
    $server="localhost";
    $user="root";
    $pass="";
    $DDBB="sistemalogin";

    try{
        $pdo= new PDO('mysql:host='.$server.';dbname='.$DDBB, $user, $pass );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql=" INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `email`, `password`, `genero`, `curso`) 
        VALUES (NULL, 'Luis', 'Garcia', 'luis@ejemplo.com', '12345', 'Hombre', 'php');";

        $rst= $pdo->prepare($sql);
        $rst->execute();

    }catch(PDOException $e){
        echo "hubo un error de conexion" . $e->getMessage();
    };
  
?>