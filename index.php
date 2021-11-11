<?php



if (isset($_SESSION['mensagem'])) :
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css">
  <title>ImóveLLoc</title>
</head>

<body>
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
<br><br>
  <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/pngegg.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/pred2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/img2.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <p>Sua casa dos sonhos!!</p>

  </div>


  <script src="./js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>