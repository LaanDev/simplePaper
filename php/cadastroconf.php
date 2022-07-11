<?php
//Realizando a conex�o com o BD
include "conexao.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv=?Content-Type? content=?text/html; charset=utf-8?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimplePaper - Cadastro de Confer�ncia</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

  <link rel="stylesheet" href="../css/style_cadastro_conf.css">
</head>

<body>
  <header class="cabecalho">
    <a href="index.php">
      <h1 class="logo"> SimplePaper</h1>
    </a>
  </header>
  <div id="cadastro-conf-container">
    <h1 id="cadastroconf">Cadastro de Confer�ncia</h1>
    <form id="register-form" action="" method="post">
      <h2 id="subtopico">Dados da Confer�ncia</h2>
      <div class="box100">
        <label for="nomeconf">Nome da Confer�ncia</label>
        <input type="text" name="nomeconf" id="nomeconf" value="<?php if (isset($nome)) echo $nome; ?>" placeholder="Digite o nome da confer�ncia" data-min-length="3">
      </div>
      <div class="box45 espacamento">
        <label for="datainicioconf">Data de In�cio da Confer�ncia</label>
        <input type="date" name="datainicioconf" id="datainicioconf">
      </div>
      <div class="box45">
        <label for="datafimconf">Data de Fim da Confer�ncia</label>
        <input type="date" name="datafimconf" id="datafimconf">
      </div>
      <div class="box100">
        <input type="checkbox" name="termos" id="termos">
        <label for="termos" id="termos-label">Eu li e aceito os <a href="termos.php">termos de uso</a></label>
      </div>
      <input type="submit" id="btn-submit" value="Cadastrar" name="cadastrar" onclick="clique()">

    </form>
  </div>

  <p class="error-validation template"></p>
  <!--tem que ficar no final do body pra dar "tempo" de carregar o HTML todo da tela-->


</html>