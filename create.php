<?php
require_once 'database.php';

if( isset($_POST['btn_cadastro'])): 
    $tipoap = mysqli_escape_string($connect, $_POST['tipoap']);
    $telap = mysqli_escape_string($connect, $_POST['telap']);
    $locap= mysqli_escape_string($connect, $_POST['locap']);

    $sql = "INSERT INTO apartamento (tipo, telefone, localizacao) VALUES ('$tipoap', '$telap', '$locap') ";

    if(mysqli_query($connect, $sql));
        header('location: index.php?sucesso');
    else:    
        header('location: index.php?erro');
    
endif;   
