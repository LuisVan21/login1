<?php 
  

  if($_SERVER["REQUEST_METHOD"]==="POST"){
    $dato=$_POST;

  echo '<pre>', var_dump($dato), '</pre>';
  }

  $nombre = (isset($_POST["nombres"]))? $_POST["nombres"]:null;
  $apellidos = (isset($_POST["apellidos"]))? $_POST["apellidos"]:null;
  $email = (isset($_POST["email"]))? $_POST["email"]:null;
  $password = (isset($_POST["password"]))? $_POST["password"]:null;
  $confirmarPassword = (isset($_POST["confirmarPassword"]))? $_POST["confirmarPassword"]:null;
  $genero = (isset($_POST["genero"]))? $_POST["genero"]:null;
  $curso= (isset($_POST["curso"]))? $_POST["curso"]:null;
     
  echo $email
?>