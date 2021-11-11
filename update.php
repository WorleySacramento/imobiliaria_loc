<?php
    session_start();

    require_once ("database.php"); ///conectar ao bd///
    
        $tipo = mysqli_real_escape_string($connect, $_POST['tipo']);
        $tel = mysqli_real_escape_string($connect, $_POST['tel']);
        $cep= mysqli_real_escape_string($connect, $_POST['cep']);
        $rua= mysqli_real_escape_string($connect, $_POST['rua']);
        $bairro= mysqli_real_escape_string($connect, $_POST['bairro']);
        $cidade= mysqli_real_escape_string($connect, $_POST['cidade']);
        $uf= mysqli_real_escape_string($connect, $_POST['uf']);

        $id= mysqli_real_escape_string($connect, $_POST['id']);

        $sql = "UPDATE apartamento SET tipo = '$tipo', telefone = '$tel', cep = '$cep', 
        rua = '$rua', bairro = '$bairro' cidade = '$cidade' uf = '$uf' WHERE id ='$id' ";
  
        $sql = mysqli_query($connect, $sql);
               header('location: index.php? sucesso');
        
?> 
