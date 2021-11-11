<?php
session_start();

require_once ("database.php"); ///antes era require///


    $tipo = mysqli_real_escape_string($connect, $_POST['tipo']);
    $tel = mysqli_real_escape_string($connect, $_POST['tel']);
    $cep= mysqli_real_escape_string($connect, $_POST['cep']);
    $rua= mysqli_real_escape_string($connect, $_POST['rua']);
    $bairro= mysqli_real_escape_string($connect, $_POST['bairro']);
    $cidade= mysqli_real_escape_string($connect, $_POST['cidade']);
    $uf= mysqli_real_escape_string($connect, $_POST['uf']);

    $sql = "INSERT INTO apartamento (tipo, telefone, cep, rua, bairro, cidade, estado) 
    VALUES ('$tipo', '$tel', '$cep','$rua', '$bairro', '$cidade', '$uf') ";

   $sql = mysqli_query($connect, $sql);
?>