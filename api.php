<?php
$url = "apartamentos.html";
$ch = curl_init($url);
$apartamento = json_decode(curl_exec($ch));


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
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>