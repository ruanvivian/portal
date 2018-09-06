<?php 
include 'modelUser.php';

if (isset($_POST['cadastrar'])){
    
    $modelo = new ModelUser();

    $user = new User();
    $user->setNome($_POST['nome']);
    $user->setGenero($_POST['genero']);
    $user->setBiografia($_POST['biografia']);
    $user->setSexo($_POST['sexo']);
    $user->setRevelacao($_POST['revelacao']);
    $user->setMenu($_POST['menu']);
    $user->setRecomendar($_POST['recomendar']);
    $user->setLive($_POST['live']);  
    $user->setImg('img');
   
   $modelo->adicionar($user);
  }
  //listar usuario em uma tabela                   
  $modelo = new ModelUser();
  $usuarios = $modelo->listar();

var_dump($usuarios);




?>