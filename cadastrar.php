<?php
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <h2>Novo imóvel</h2>
                <form action="create.php" method="POST">
               
                    <div><label for=""> CEP <input type="text" placeholder="CEP" name="cep" id="cep" onblur="pesquisacep(this.value);" ></label></div>
                    <div><label for="">Rua <input type="text" placeholder="Rua" name="rua" id="rua" ></label> </div>
                    <div><label for="">Bairro <input type="text" placeholder="Bairro" name="bairro" id="bairro"  ></label> </div>
                    <div><label for="">Cidade <input type="text" placeholder="Cidade" name="cidade" id="cidade"  ></label> </div>
                    <div><label for="">Estado <input type="text" placeholder="uf" name="uf" id="uf"  ></label> </div>

                    <div>
                        <label for="tipo" id="tipo">Tipo</label>
                        <input type="text" name="tipo" id="tipo">

                    </div>

                    <div>
                        <label for="tel" id="tel">Telefone</label>
                        <input type="text" name="tel" id="tel">

                    </div>

                    <button type="submit" class=" btn-primary" href="index.php" >cadastro </button>
                    <a type="btn" class=" btn-info" href="apartamentos.php">Lista imoveis</a>
                </form>

            </div>
        </div>






        






        <script src="script.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>