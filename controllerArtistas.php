<?php
 include 'modelArtistas.php';


    $artistas = new artistas();
    
    $artistas->setNome($_POST['nome']);
    $artistas->setGenero($_POST['genero']);
    $artistas->setBiografia($_POST['biografia']);
    $artistas->setSexo($_POST['sexo']);
    $artistas->setRevelacao($_POST['revelacao']);
    $artistas->setMenu($_POST['menu']);
    $artistas->setRecomendar($_POST['recomendar']);
    $artistas->setLive($_POST['live']);
    $artistas->setImg("2.jpg");
    

    $modelo = new ModelArtistas();
    $modelo->adicionar($artistas);
?>
