<?php

session_start();

//Criando vari�veis para conectar no banco LOCALHOST
$servername = "localhost";
$database = "SimplePaper";
$username = "SP_Laan";
$password = "LaanDB98";

//Criando vari�veis para conectar no banco OFICIAL
// $servername = "108.179.253.195";
// $database = "proje500_simplepaper";
// $username = "proje500_henrico";
// $password = "F$2a%sR~ZoBM";

//Criando a conex�o com o banco
$conn = mysqli_connect($servername, $username, $password, $database);

//Verificando se a conex�o deu certo
if (!$conn) {
  die("Conex�o FALHA: " . mysqli_connect_error());
}
