<?php 
    include 'modelUser.php';


    $user = new User();
    
    $user->setFirstName($_POST['first_name']);
    $user->setLastName($_POST['last_name']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    $user->setImage("2.jpg");
    

    $modelo = new ModelUser();
    $modelo->adicionar($user);

?>
