<?php
include_once '/database.php';

if(isset($_GET ['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM apartamento WHERE id = 'id' ";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
     integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ImóveLLoc</title>
</head>

<body>

<div class="container">
   <!--Menu Principal-->
   <nav class="menu navbar navbar-expand">
        <div class=" nav">
            <div><a href="index.php">Home</a></div>
            <br><br>
            <div><a href="apartamentos.php">Apartamentos</a></div>
            <div><a href="cadastrar.php" >Cadastrar imovel</a></div>
            <div> <a href="contatos.php">Fale Conosco</a></div>
        </div>
    </nav>
    <!--Fim menu principal-->
    <br><br><br><br>

    
        <div class="row">
            <div class="col ">
                <h2>Editar imóvel</h2>
                <form action="update.php" method="POST">
                     


                    <div>
                        <label for="tipoap" id="tipoap">Tipo</label>
                        <input type="text" name="tipoap" id="tipoap" value="<?php echo $dados['tipo']?>">

                    </div>

                    <div>
                        <label for="telap" id="telap">Telefone</label>
                        <input type="text" name="telap" id="telap" value="<?php echo $dados['telap']?>">

                    </div>

                    <div>
                       <p>Digite Cep</p>
                        <input type="text" placeholder="CEP" name="cep">
                        <input type="submit" value="">
                        <input type="text" placeholder="Rua" name="rua">
                        <input type="text" placeholder="Bairro" name="bairro">
                        <input type="text" placeholder="Cidade" name="cidade">
                        <input type="text" placeholder="Estado" name="estado">

                    </div>

                    <button type="submit" name="btn_cadastro">Atualizar</button>
                    <a class=" btn-info" href="index.php">Lista imoveis</a>
                </form>

            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>