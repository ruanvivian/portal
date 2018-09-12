<?php 
    include 'controllerArtistas.php';
?>				
<!DOCTYPE html>
<html> 
	<head>
            <meta charset="UTF-8">
    
        <link href="css/bootstrap.min.css" rel="stylesheet" >
        
        
        <link href="css/meuestilo.css" rel="stylesheet">
    </head>
	<body>
	   <div class="container-fluid">
        <form method="POST" action ="index.php">
          
            
    
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nomeHelp" placeholder="Digite o nome do artista">
            <small id="nomeHelp" class="form-text text-muted">Preencha apenas com o nome.</small>
          </div>
            
    
        <div class="form-group">
            <label for="genero">Gênero:</label>
            <input type="text" class="form-control" id="genero" name="genero" aria-describedby="generoHelp" placeholder="Digite o gênero das músicas do artista">
            <small id="generoHelp" class="form-text text-muted">Preencha apenas com o gênero.</small>
          </div>
            
           
        <div class="form-group">
            <label for="biografia">Biografia</label>
            <input type="text" class="form-control" id="biografia" name="biografia" aria-describedby="bioHelp" placeholder="Digite a biografia">
            <small id="bioHelp" class="form-text text-muted">Preencha com a biografia.</small>
          </div>
            
            
          <div class="form-group">
            <label for="sexo">Sexo: </label>
              <select class="custom-select" name="sexo" id="inputGroupSelect02">
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
              </select>
          </div>
          
          <div class="form-group form-check">
            <input type='hidden' value='off' name='revelacao'>
            <input type="checkbox" class="form-check-input" id="revelacao"  name="revelacao">
            <label class="form-check-label" for="revelacao"> Dê "check" se o artista for revelação</label>
          </div>
            
           <div class="form-group form-check">
            <input type='hidden' value='off' name='live'>
            <input type="checkbox" class="form-check-input" id="live" name="live">
            <label class="form-check-label" for="live">Dê "check" se o artista for recomendação de ao vivo</label>
          </div> 
  
          <div class="form-group form-check">
            <input type='hidden' value='off' name='menu'>
            <input type="checkbox" class="form-check-input" id="menu"  name="menu">
            <label class="form-check-label" for="menu">Dê "check" se o artista fizer parte do menu</label>
          </div>
            
          <button type="submit" class="btn btn-danger" name="cadastrar" >Cadastrar</button>
        </form>
        
           
        </div>
	</body>    
</html>