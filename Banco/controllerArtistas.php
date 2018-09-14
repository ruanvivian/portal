<?php
 include 'modelArtistas.php';

var_dump($_POST);

    $modelo = new ModelArtistas();
if ( isset($_POST['cadastrar'])){
    $artistas = new Artistas();
    
    $artistas->setNome($_POST['nome']);
    $artistas->setGenero($_POST['genero']);
    $artistas->setBiografia($_POST['biografia']);
    $artistas->setSexo($_POST['sexo']);
    $artistas->setRevelacao($_POST['revelacao']);
    $artistas->setMenu($_POST['menu']);
    $artistas->setLive($_POST['live']);
    $artistas->setImg("2.jpg");
    

    $modelo->adicionar($artistas);
}
    $lista_artistas= $modelo->listar;
?>