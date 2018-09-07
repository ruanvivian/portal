<?php
include 'artistas.php';

class ModelArtistas
{

    public function adicionar(artistas $artistas){
        include 'bd.php';
        
        
        $query = "INSERT INTO artistas(nome, genero, biografia, img, sexo, revelacao, menu, live, recomendar) 
            VALUES (:nome, :genero, :biografia, :img, :sexo, :revelacao, :menu, :live, :recomendar)";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':nome'] = $artistas->getNome();
        $valores[':genero'] = $artistas->getGenero();
        $valores[':biografia'] = $artistas->getBiografia();
        $valores[':img'] = $artistas->getImg();
        $valores[':sexo'] = $artistas->getSexo();
        $valores[':revelacao'] = $artistas->getRevelacao();
        $valores[':menu'] = $artistas->getMenu();
        $valores[':live'] = $artistas->getLive();
        $valores[':recomendar'] = $artistas->getRecomendar();

        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Inserir artista deu erro.";
        }else{
            echo "Inserir artista deu certo.";
        } 
    }

    public function listar(){
        include 'bd.php';
        
        $query = "SELECT nome, genero, biografia, img, sexo, revelacao, menu, live, recomendar FROM artistas";
        
        $statement = $connection->prepare($query);
        
        //executar a query
        $result = $statement->execute();
        
        //junta todos os usuarios retornados em um array de array usuario
        //pro exemplo o 
        $u = $result[0];//pega primeiro usuario
        echo $u['nome'];
        $u = $result[1];
        echo $u['nome'];//pega segundo usuario
        
        $result = $statement->fetchAll();
        
        return $result;
    }

    
    public function editar(artistas $artistas){
        include 'bd.php';
        
        
        $query = "UPDATE artistas SET nome = :nome, genero = :genero, biografia = :biografia, img = :img, sexo = :sexo, revelacao = :revelacao, menu = :menu, live = :live, recomendar WHERE nome = :nome";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':nome'] = $artistas->getNome();
        $valores[':genero'] = $artistas->getGenero();
        $valores[':biografia'] = $user->getBiografia();
        $valores[':img'] = $artistas->getImg();
        $valores[':sexo'] = $artistas->getSexo();
        $valores[':revelacao'] = $artistas->getRevelacao();
        $valores[':menu'] = $artistas->getMenu();
        $valores[':live'] = $artistas->getLive();
        $valores[':recomendar'] = $artistas->getRecomendar();
        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Alterar usuário deu erro.";
        }else{
            echo "Alterar usuário deu certo.";
        } 
    }
    
    public function remover($nome){
        include 'bd.php';
        
        $query = "DELETE FROM artistas WHERE nome = :nome";
        
        $statement = $connection->prepare($query);
        
        
        $valores = array();
        $valores[':nome'] = $nome;
    
        $result = $statement->execute($valores);
        
        
        if(  empty($result)  ){
            echo "Remover artistas deu erro.";
        }else{
            echo "Remover artistas deu certo.";
        }         
        
    }
}

?>