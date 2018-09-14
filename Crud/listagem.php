<?php 

$username = 'root';
$password = '';
$connection = new PDO( 'mysql:host=localhost;dbname=artistas', $username, $password );

$query = "INSERT INTO artistas(nome, genero, biografia, img, sexo, menu, live, revelacao) 
            VALUES (:nome, :genero, :biografia, :img, :sexo, :menu, :live, :revelacao)";

$statement = $connection->prepare($query);

$valores = array();
$valores[':first_name'] = $_POST['meunome'];
$valores[':last_name'] = "Alves";
$valores[':image'] = "2.jpg";

$result = $statement->execute($valores);

if(  empty($result) ){
  print "<br>Nao inseriu";
}else{
  print "<br>Deu certo inserir";
}

var_dump($_POST);

$campo_obrigatorio = "";

if (isset($_POST['enviar'])){
    if( empty($_POST['nome'])  ){
        
        $campo_obrigatorio = "PREENCHAAAA";
    }else
        echo "<br><b>".$_POST['nome']."</b>";

}
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
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="meunome" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-danger">Submit</button>
        </form>
        
        
        <table border='1'>
			<form action="" method="POST">
				
				<tr>
					<td align="center"><b>Nome</b></td>
					<td><input type="text" name="nome">
                        <?php echo $campo_obrigatorio;  ?></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit"  name="enviar" value="ok">
					</td>
				</tr>
			
			</form>
		</table>
           
        </div>
	</body>    
</html>