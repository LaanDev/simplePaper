<?php

session_start();

//Criando vari�veis para conectar no banco
$servername = "localhost";
$database = "SimplePaper";
$username = "SP_Laan";
$password = "LaanDB98";


//Criando a conex�o com o banco
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificando se a conex�o deu certo
if (!$conn) {
  die("Conex�o FALHA: " . mysqli_connect_error());
}
