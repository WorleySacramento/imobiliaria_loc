<?php
session_start();
include_once 'database.php';


$id = mysqli_escape_string($connect, $_GET['id']);

$sql = "SELECT * FROM apartamento WHERE id = '$id' ";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>ImóveLLoc</title>
</head>

<body>
    <div class=" container-fluid">
        <header>
            <div class="container" id="nav-container">
                <!--Menu Principal-->
                <nav class="fixed-top navbar navbar-expand-lg">
                    <div class=" collapse navbar-collapse justify-content" id="navbar-links">
                        <div class="navbar-nav">
                            <a href="index.php" class=" nav-item nav-link" id="home-menu">Home</a>
                            <a href="apartamentos.php" class=" nav-item nav-link" id="apart-menu">Apartamentos</a>
                            <a href="cadastrar.php" class=" nav-item nav-link" id="cad-menu">Cadastrar imóvel</a>
                            
                        </div>
                    </div>
                    <br><br>

                </nav>
                <!--Fim menu principal-->
            </div>
        </header>
        <br><br><br><br>


        <div class="container d-lg-flex justify-content-center">
            <div class=" ">
                <h2>Editar informações</h2>
                <form class=" form form-control form-check-inline " action=" update.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
                    <div class="form-control form-check-inline mb-3">
                        <label for=""> CEP
                            <input type="text" placeholder="CEP" name="cep" id="cep" onblur="pesquisacep(this.value);" value="<?php echo $dados['cep'] ?>">
                        </label>
                    </div>

                    <div class="form-control  mb-3">
                        <label for="">Rua <input type="text" placeholder="Rua" name="rua" id="rua" value="<?php echo $dados['rua'] ?>">
                        </label>
                    </div>

                    <div class="form-control  mb-3">
                        <label for="">Bairro <input type="text" placeholder="Bairro" name="bairro" id="bairro" value="<?php echo $dados['bairro'] ?>">
                        </label>
                    </div>

                    <div class="form-control  mb-3">
                        <label for="">Cidade <input type="text" placeholder="Cidade" name="cidade" id="cidade" value="<?php echo $dados['cidade'] ?>">
                        </label>
                    </div>

                    <div class="form-control  mb-3">
                        <label for="">Estado <input type="text" placeholder="uf" name="uf" id="uf" value="<?php echo $dados['estado'] ?>">
                        </label>
                    </div>

                    <div class="form-control  mb-3">
                        <label for="tipo" id="tipo">Tipo</label>
                        <input type="text" name="tipo" id="tipo" value="<?php echo $dados['tipo'] ?>">
                    </div>

                    <div class="form-control  mb-3">
                        <label for="tel" id="tel">Telefone</label>
                        <input type="text" name="tel" id="tel" value="<?php echo $dados['telefone'] ?>">
                    </div>

                    <button type="submit" name="btn-editar" class=" btn-primary" href="index.php">Salvar </button>
                    <a type="btn" class=" btn-info" href="apartamentos.php">Lista imoveis</a>
                </form>

            </div>
        </div>

    </div>
    <script src="./js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>