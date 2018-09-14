<?php  
 class Crud  
 {  
      //crud class  
      public $connect;  
      private $host = "localhost";  
      private $username = 'root';  
      private $password = '';  
      private     $database = 'artistas';  
      function __construct()  
      {  
           $this->database_connect();  
      }  
      public function database_connect()  
      {  
           $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
          
      }  
      public function execute_query($query)  
      {  
           return mysqli_query($this->connect, $query);  
      }  
      public function get_data_in_table($query)  
      {  
           $output = '';  
           $result = $this->execute_query($query);  
           $output .= '  
           <table class="table table-bordered table-striped">  
                <tr>  
                     <th width="10%">Imagem</th>  
                     <th width="35%">Nome</th>  
                     <th width="35%">Genero</th>
                     <th width="10%">Update</th>  
                     <th width="10%">Delete</th>  
                </tr>  
           '; 
          
           while($row = mysqli_fetch_object($result))  
           {  
                $output .= '  
                <tr>       
                     <td><img src="upload/'.$row->image.'" class="img-thumbnail" width="50" height="35" /></td>  
                     <td>'.$row->first_name.'</td>  
                     <td>'.$row->last_name.'</td>  
                     <td><button type="button" name="update" id="'.$row->id.'" class="btn btn-success btn-xs update">Update</button></td>  
                     <td><button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs delete">Delete</button></td>  
                </tr>  
                ';  
           }  
           $output .= '</table>';  
           return $output;  
      }       
 }  
 ?>  