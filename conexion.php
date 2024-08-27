<?php 
    
    $server="localhost";
    $user="root";
    $pass="";
    $DDBB="sistemalogin";

    try{
        $pdo= new PDO('mysql:host='.$server.';dbname='.$DDBB, $user, $pass );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        

    }catch(PDOException $e){
        echo "hubo un error de conexion" . $e->getMessage();
    };
  
?>