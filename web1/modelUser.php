<?php
include 'user.php';

class ModelUser{

    public function adicionar(User $user){
        include 'bd.php';
            
        $query = "INSERT INTO artistas (nome, genero, biografia, sexo, img, revelacao, menu, recomendar, live) 
              VALUES (:nome, :genero, :biografia, :sexo, :img, :revelacao, :menu, :recomendar, :live)";

        $statement = $connection->prepare($query);

        $valores = array();
        $valores[':nome'] = $user->getNome();
        $valores[':genero'] = $user->getGenero();
        $valores[':biografia'] = $user->getBioagrafia();
        $valores[':sexo'] = $user->getSexo();
        $valores[':img'] = $user->getImg();
        $valores[':revelacao'] = $user->getRevelacao();
        $valores[':menu'] = $user->getMenu();
        $valores[':recomendar'] = $user->getRecomendar();
        $valores[':live'] = $user->getLive();
      
        $result = $statement->execute($valores);

        if(  empty($result) ){
          print "<br>Nao inseriu";
          print_r(  $statement->errorInfo()  );
        }else{
          print "<br>Deu certo inserir";
        }

    }
    
    
    public function editar(){
        
    }
    
    
    public function listar(){
      include 'bd.php';
      //criei uma query
      
      $query = "SELECT nome, genero, biografia, sexo, img, revelacao, menu, recomendar, live FROM artistas ";
      //prepara a query
      $statement = $connection->prepare($query);
      //executar o comando
      $result = $statement->execute();
      //juntar os resultados em um vetor de arrays
      $result = $statement->fetchAll();
      /**
      $u = $result[0];
      **/
      
      
      
       if(  empty($result) ){
          print "<br>Nao listou";
          print_r(  $statement->errorInfo()  );
        }else{
          print "<br>Deu certo listar";
        }
      
      return $result;
      
      
        
    }
    
    
    public function remover(){
        
    }
    
    


}

?>