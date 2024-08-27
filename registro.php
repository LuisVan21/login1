<?php 
  
  include("conexion.php");

  $nombre = (isset($_POST["nombres"]))? $_POST["nombres"]:null;
  $apellido = (isset($_POST["apellidos"]))? $_POST["apellidos"]:null;
  $email = (isset($_POST["email"]))? $_POST["email"]:null;
  $password = (isset($_POST["password"]))? $_POST["password"]:null;
  $confirmarPassword = (isset($_POST["confirmarPassword"]))? $_POST["confirmarPassword"]:null;
  $genero = (isset($_POST["genero"]))? $_POST["genero"]:null;
  $curso= (isset($_POST["curso"]))? $_POST["curso"]:null;

  $error=[];
  

  if (!empty($nombre)=== TRUE){
    }else{
    echo $error['nombres']="debe ingresar el nombre <br/>";}
    if (!empty($apellido)=== TRUE){
    }else{
    echo $error['apellidos']="debe ingresar el apellido <br/>";}

    if (!empty($genero)=== TRUE){
    }else{
    echo $error['genero']="debe selecionar genero <br/>";}
    
    if (!empty($curso)=== TRUE){
    }else{
    echo $error['curso']="debe ingresar el curso <br/>";}


  if($_SERVER["REQUEST_METHOD"]==="POST"){
    $dato=$_POST;
    echo '<pre>', var_dump($dato), '</pre>';

    $sql=" INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `email`, `password`, `genero`, `curso`) 
        VALUES (NULL, :nombres, :apellidos, :email, :password, :genero, :curso);";

        $rst= $pdo->prepare($sql);
        $rst->execute(array(
          ':nombres'=>$nombre,
          ':apellidos'=>$apellido,
          ':email'=>$email,
          'password'=>$password,
          ':genero'=>$genero,
          ':curso'=>$curso


        ));

  
  }

  
     
  echo $email
?>