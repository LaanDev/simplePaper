<?php

session_start();

//Criando variáveis para conectar no banco LOCALHOST
$servername = "localhost";
$database = "SimplePaper";
$username = "SP_Laan";
$password = "LaanDB98";

//Criando variáveis para conectar no banco OFICIAL
// $servername = "108.179.253.195";
// $database = "proje500_simplepaper";
// $username = "proje500_henrico";
// $password = "F$2a%sR~ZoBM";

//Criando a conexão com o banco
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificando se a conexão deu certo
if (!$conn) {
  die("Conexão FALHA: " . mysqli_connect_error());
}
