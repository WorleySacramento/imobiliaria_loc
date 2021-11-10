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
    <!--Menu Principal-->
    <nav class="menu navbar navbar-expand">
        <div class=" nav">
            <div><a href="index.html">Home</a></div>
            <br><br>
            <div><a href="apartamentos.html">Apartamentos</a></div>
            <div><a href="casas.html">Casas</a></div>
            <div> <a href="contatos.html">Fale Conosco</a></div>
        </div>
    </nav>
    <!--Fim menu principal-->
    <br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col ">
                <h2>Novo imóvel</h2>
                <form action="create.php" method="POST">
                    <div>
                        <label for="tipoap" id="tipoap">Tipo</label>
                        <input type="text" name="tipoap" id="tipoap">

                    </div>

                    <div>
                        <label for="teloap" id="teloap">Telefone</label>
                        <input type="text" name="teloap" id="teloap">

                    </div>

                    <div>
                        <label for="locap" id="locap">Localização</label>
                        <input type="text" name="locap" id="locap">

                    </div>
                    <button type="submit" name="btn_cadastro">cadastro</button>
                    <a class=" btn-info" href="index.php">Lista imoveis</a>
                </form>

            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>