<?php

session_start();

//Criando variáveis para conectar no banco
$servername = "localhost";
$database = "SimplePaper";
$username = "SP_Laan";
$password = "LaanDB98";


//Criando a conexão com o banco
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificando se a conexão deu certo
if (!$conn) {
  die("Conexão FALHA: " . mysqli_connect_error());
}
