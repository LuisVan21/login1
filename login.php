<?php 
  
    if($_SERVER['REQUEST_METHOD']==="POST"){

        include("conexion.php");

        //echo '<pre>', var_dump($_POST), '</pre>';

        $email=(isset($_POST['email']))?htmlspecialchars($_POST['email']):NULL;
        $password=(isset($_POST['password']))?$_POST['password']: NULL;


        $sql= "SELECT * FROM `usuarios` WHERE email=:email ";
        $sentencia= $pdo->prepare($sql); 

        $sentencia->execute(['email'=>$email]);

        $usuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $login= false;

        foreach($usuarios as $user){
            /*
                 if($password ===$user["password"]){
            $login= true;
            }*/

            //confirmacion de un password encriptado
            if(password_verify($password,$user["password"])){
                $login= true;
            }

           
        }

        if($login){
            echo "Existe en DB";
        }else{
            echo "no existe en DB";
        }

        echo $login;

        //echo '<pre>', var_dump($login), '</pre>';

    }

  ?>