<?php
session_start();

require_once ("database.php"); ///conectar ao bd///
    
     

        $id= mysqli_real_escape_string($connect, $_POST['id']);

        $sql = "DELETE FROM apartamento  WHERE id ='$id' ";
  
        $sql = mysqli_query($connect, $sql);
               header('location: index.php? sucesso');
        
?> 
