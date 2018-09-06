<?php
include 'user.php';

class ModelUser
{

    public function adicionar(User $user){
        include 'bd.php';
        
        
        $query = "INSERT INTO users(first_name, last_name, email, password, image) 
            VALUES (:first_name, :last_name, :email, :password, :image)";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':first_name'] = $user->getFirstName();
        $valores[':last_name'] = $user->getLastName();
        $valores[':email'] = $user->getEmail();
        $valores[':password'] = $user->getPassword();
        $valores[':image'] = $user->getImage();
        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Inserir usuário deu erro.";
        }else{
            echo "Inserir usuário deu certo.";
        } 
    }

    public function listar(){
        include 'db.php';
        
        $query = "SELECT id, first_name, last_name, email, image FROM users";
        
        $statement = $connection->prepare($query);
        
        //executar a query
        $result = $statement->execute();
        
        //junta todos os usuarios retornados em um array de array usuario
        //pro exemplo o 
        $u = $result[0];//pega primeiro usuario
        echo $u['first_name'];
        $u = $result[1];
        echo $u['first_name'];//pega segundo usuario
        
        $result = $statement->fetchAll();
        
        return $result;
    }

    
    public function editar(User $user){
        include 'db.php';
        
        
        $query = "UPDATE users SET first_name = :first_name, last_name = :last_name, email=:email, password=:password, image=:image WHERE id = :id";
        
        $statement= $connection->prepare($query);
        
        $valores = array();
        $valores[':first_name'] = $user->getFirstName();
        $valores[':last_name'] = $user->getLastName();
        $valores[':email'] = $user->getEmail();
        $valores[':password'] = $user->getPassword();
        $valores[':image'] = $user->getImage();
        $valores[':id'] = $user->getId();
        
        $result = $statement->execute($valores);
        
        if(  empty($result)  ){
            echo "Alterar usuário deu erro.";
        }else{
            echo "Alterar usuário deu certo.";
        } 
    }
    
    public function remover($id){
        include 'db.php';
        
        $query = "DELETE FROM users WHERE id = :id";
        
        $statement = $connection->prepare($query);
        
        
        $valores = array();
        $valores[':id'] = $id;
    
        $result = $statement->execute($valores);
        
        
        if(  empty($result)  ){
            echo "Remover usuário deu erro.";
        }else{
            echo "Remover usuário deu certo.";
        }         
        
    }
}

?>