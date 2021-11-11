<?php



if(isset($_SESSION['mensagem'])):
  echo $_SESSION['mensagem'];
endif;
session_unset();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <h1>O seu lar, no lugar certo!</h1>
    <p>Sua casa dos sonhos!!</p>




  </div>
   
    






    <script>
      window.onload = function(){
        toast.show($_SESSION['mensagem']);{
          ""
        }
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>