<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv=?Content-Type? content=?text/html; charset=utf-8?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimplePaper - Cadastro de Conferência</title>
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
    <h1 id="cadastroconf">Cadastro de Conferência</h1>
    <form id="register-form" action="" method="post">
      <h2 id="subtopico">Dados da Conferência</h2>
      <div class="box100">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php if (isset($nome)) echo $nome; ?>" placeholder="Digite seu nome completo" data-min-length="3">
      </div>
      <div class="box45 espacamento">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?php if (isset($cpf)) echo $cpf; ?>" placeholder="Digite seu CPF">
      </div>
      <div class="box45">
        <label for="datanasc">Data de Nascimento</label>
        <input type="date" name="datanasc" id="datanasc">
      </div>
      <div class="box55 espacamento">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?php if (isset($email)) echo $email; ?>" placeholder="Digite seu email" autocomplete="off">
      </div>
      <div class="box35">
        <label for="nacionalidade">Nacionalidade</label>
        <input type="text" name="nacionalidade" id="nacionalidade" value="<?php if (isset($nacionalidade)) echo $nacionalidade; ?>" placeholder="Digite sua nacionalidade">
      </div>
      <div class="box45 espacamento">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?php if (isset($telefone)) echo $telefone; ?>" placeholder="Digite seu telefone Ex: (xx) 9 xxxx-xxxx">
      </div>
      <div class="box45">
        <label for="profissao">Profissão</label>
        <input type="text" name="profissao" id="profissao" value="<?php if (isset($profissao)) echo $profissao; ?>" placeholder="Digite sua profissão">
      </div>
      <div class="box45 espacamento">
        <label for="area_atuacao">Área de Atuação</label>
        <input type="text" name="area_atuacao" id="area_atuacao" value="<?php if (isset($area_atuacao)) echo $area_atuacao; ?>" placeholder="Digite sua área de atuação">
      </div>
      <div class="box45">
        <label for="nivel_graduacao">Ní­vel de Graduação</label>
        <input type="text" name="nivel_graduacao" id="nivel_graduacao" value="<?php if (isset($nivel_graduacao)) echo $nivel_graduacao; ?>" placeholder="Digite seu ní­vel de graduação">
      </div>
      <div class="box45 espacamento">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="<?php if (isset($senha)) echo $senha; ?>" placeholder="Digite sua senha">
      </div>
      <div class="box45">
        <label for="confirmasenha">Confirma senha</label>
        <input type="password" name="confirmasenha" id="confirmasenha" value="<?php if (isset($confirmasenha)) echo $confirmasenha; ?>" placeholder="Confirme sua senha">
      </div>
      <h2 class="box100" id="subtopico">Dados do Endereço</h2>
      <div class="box55 espacamento">
        <label for="rua">Rua</label>
        <input type="text" name="rua" id="rua" value="<?php if (isset($rua)) echo $rua; ?>" placeholder="Digite sua rua">
      </div>
      <div class="box35">
        <label for="numero">Número</label>
        <input type="text" name="numero" id="numero" value="<?php if (isset($numero)) echo $numero; ?>" placeholder="Digite o número da sua casa">
      </div>
      <div class="box45 espacamento">
        <label for="complemento">Complemento</label>
        <input type="text" name="complemento" id="complemento" value="<?php if (isset($complemento)) echo $complemento; ?>" placeholder="Digite o complemento da sua rua">
      </div>
      <div class="box45">
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" value="<?php if (isset($bairro)) echo $bairro; ?>" placeholder="Digite seu Bairro">
      </div>
      <div class="box25 espacamento">
        <label for="cep">CEP</label>
        <input type="text" name="cep" id="cep" value="<?php if (isset($cep)) echo $cep; ?>" placeholder="Digite seu CEP">
      </div>
      <div class="box40 espacamento">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" value="<?php if (isset($cidade)) echo $cidade; ?>" placeholder="Digite sua Cidade">
      </div>
      <div class="box25">
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado" value="<?php if (isset($estado)) echo $estado; ?>" placeholder="Digite seu Estado">
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