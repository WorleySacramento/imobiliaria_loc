<?php

$servername = "localhost";
$username = "root";
$psw = "";
$db_name = "imovel_db";

$connect = mysqli_connect($servername, $username, $psw, $db_name);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()): 
		echo"Erro na conexão: ".mysqli_connect_error();
endif;