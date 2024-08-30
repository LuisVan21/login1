<?php 

session_start();
  
    if($_SERVER['REQUEST_METHOD']==="POST"){

        include("conexion.php");

        //echo '<pre>', var_dump($_POST), '</pre>';
        

        // se toman valores a verificar
        $email=(isset($_POST['email']))?htmlspecialchars($_POST['email']):NULL;
        $password=(isset($_POST['password']))?$_POST['password']: NULL;

            $error=[];
        // Validacion de datos
            if(empty($email)){
            $error['email']="correo es obligatorio <br/>";
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error['email']="contrasenia incorrecta <br/>";}

            if (empty($password)){
            $error['password']="la contrasenia es obligatoria <br/>";}

            if (empty($error)){

            $sql= "SELECT * FROM `usuarios` WHERE email=:email ";
            $sentencia= $pdo->prepare($sql); 

            $sentencia->execute(['email'=>$email]);

            $usuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);

            $login= false;

            // se busca password en la BD
            foreach($usuarios as $user){

                //confirmacion de un password encriptado
                if(password_verify($password,$user["password"])){
                    $_SESSION["usuario_id"]=$user["id"];
                    $_SESSION["usuario_nombre"]=$user["nombres"];
                     $_SESSION["usuario_apellido"]=$user["apellidos"];
                    $login= true;
                    }
                }
            
                if($login){
                    echo "Existe usuario en DB";
                    header("Location:index.php");
                }else{
                    echo "no existe usuario en DB";
                }
        }else{
             foreach($error as $errores){
                        echo $errores;
                    }
        }
                echo "<br/> <a href='login.html'>Regresa al login</a>";
    } 
  ?>