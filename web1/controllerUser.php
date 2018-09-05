<?php 
include 'modelUser.php';

if (isset($_POST['cadastrar'])){
    
    $modelo = new ModelUser();

    $user = new User();
    $user->setFirstName($_POST['first_name']);
    $user->setLastName($_POST['last_name']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    $user->setImage('imagem');

    $modelo->adicionar($user);
}
//listar usuario em uma tabela                   
$modelo = new ModelUser();
$usuarios = $modelo->listar();

var_dump($usuarios);




?>