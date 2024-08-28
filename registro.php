<?php 
  
  include("conexion.php");
  

     // if(!empty($error)===TRUE){

     if($_SERVER["REQUEST_METHOD"]==="POST"){
      $error=[];
      
      $nombre = (isset($_POST["nombres"]))? $_POST["nombres"]:null;
      $apellido = (isset($_POST["apellidos"]))? $_POST["apellidos"]:null;
      $email = (isset($_POST["email"]))? $_POST["email"]:null;
      $password = (isset($_POST["password"]))? $_POST["password"]:null;
      $confirmarPassword = (isset($_POST["confirmarPassword"]))? $_POST["confirmarPassword"]:null;
      $genero = (isset($_POST["genero"]))? $_POST["genero"]:null;
      $curso= (isset($_POST["curso"]))? $_POST["curso"]:null;

      $dato=$_POST;
      //echo '<pre>', var_dump($error), '</pre>';

      if (empty($nombre)){
         $error['nombres']="debe ingresar el nombre <br/>";}
    if (empty($apellido)){
        $error['apellidos']="debe ingresar el apellido <br/>";}

    if (empty($genero)){
        $error['genero']="debe selecionar genero <br/>";}
    if (empty($curso)){
        $error['curso']="debe ingresar el curso <br/>";}
    if(empty($email)){
        $error['email']="correo es obligatorio <br/>";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $error['email']="formato incorrecto <br/>";}

    if (empty($password)){
        $error['password']="la contrasenia es obligatoria <br/>";
      }
    if(empty($confirmarPassword)){
        $error['confirmarPassword']="confirma la contrasenia <br/>";
        }elseif($password != $confirmarPassword){
        $error['confirmarPassword']="las contrasenias no coinciden <br/>";
        }

        foreach($error as $errores){
          echo $errores ."<br/>";
        }

     //echo '<pre>', var_dump($error), '</pre>';

      if (empty($error)){

        // encriptacion de un password
        $nuevoPassword =password_hash($password, PASSWORD_DEFAULT);

         $sql=" INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `email`, `password`, `genero`, `curso`) 
        VALUES (NULL, :nombres, :apellidos, :email, :password, :genero, :curso);";

        $rst= $pdo->prepare($sql);
        $rst->execute(array(
          ':nombres'=>$nombre,
          ':apellidos'=>$apellido,
          ':email'=>$email,
          ':password'=>$nuevoPassword,
          ':genero'=>$genero,
          ':curso'=>$curso
        ));
        
        header("Location:login.html") ;
        
        
      }else{
        echo "<a href='registro.html'>Regresa al formulario de registro</a>";
      }
  }
   
  
  

    
      
      
/*
if (empty($nombre)){
    }else{ $error['nombres']="debe ingresar el nombre <br/>";}
    if (empty($apellido)){
    }else{
    echo $error['apellidos']="debe ingresar el apellido <br/>";}

    if (empty($genero)){
    }else{
    echo $error['genero']="debe selecionar genero <br/>";}
    
    if (empty($curso)){
    }else{
    echo $error['curso']="debe ingresar el curso <br/>";}
*/
  
?>