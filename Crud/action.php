<?php  
 //action.php  
 include 'crud.php';  
 $object = new Crud();  
 $resultado = '';
 if(isset($_POST["action"]))  
 {  
      if($_POST["action"] == "Load")  
      {  
           $resultado = $object->get_data_in_table("SELECT * FROM users ORDER BY id DESC");  
      }  
 }  
 ?> 