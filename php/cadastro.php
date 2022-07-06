<?php ?>
//HTML da página de cadastro
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimplePaper - Cadastro de Usuário</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

  <link rel="stylesheet" href="../css/style_cadastro.css">
</head>

<body>
  <header class="cabecalho">
    <a href="index.php">
      <h1 class="logo"> SimplePaper</h1>
    </a>
  </header>
  <div id="cadastro-container">
    <h1 id="cadastro">Cadastro</h1>
    <form id="register-form">
      <h2 id="subtopico">Dados Pessoais</h2>
      <div class="box100">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" data-min-length="3">
      </div>
      <div class="box45 espacamento">
        <label for="CPF">CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
      </div>
      <div class="box45">
        <label for="datanasc">Data de Nascimento</label>
        <input type="date" name="datanasc" id="datanasc">
      </div>
      <div class="box100">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off">
      </div>
      <div class="box45 espacamento">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone Ex: (xx) 9 XXXX-XXXX">
      </div>
      <div class="box45">
        <label for="profissao">Profissão</label>
        <input type="text" name="profissao" id="profissao" placeholder="Digite sua profissão">
      </div>
      <div class="box45 espacamento">
        <label for="area_atuacao">Área de Atuação</label>
        <input type="text" name="area_atuacao" id="area_atuacao" placeholder="Digite sua área de atuação">
      </div>
      <div class="box45">
        <label for="nivel_graduacao">Nível de Graduação teste</label>
        <input type="text" name="nivel_graduacao" id="nivel_graduacao" placeholder="Confirme seu nível de graduação">
      </div>
      <div class="box45 espacamento">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
      </div>
      <div class="box45">
        <label for="confirmasenha">Confirma senha</label>
        <input type="password" name="confirmasenha" id="confirmasenha" placeholder="Confirme sua senha">
      </div>
      <h2 class="box100" id="subtopico">Dados do Endereço</h2>
      <div class="box55 espacamento">
        <label for="rua">Rua</label>
        <input type="text" name="rua" id="rua" placeholder="Digite sua rua">
      </div>
      <div class="box35">
        <label for="nome">Número</label>
        <input type="text" name="numero" id="numero" placeholder="Digite o número da sua casa">
      </div>
      <div class="box100">
        <input type="checkbox" name="termos" id="termos">
        <label for="termos" id="termos-label">Eu li e aceito os <a href="termos.php">termos de uso</a></label>
      </div>
      <input type="submit" id="btn-submit" value="Cadastrar">

    </form>
  </div>

  <p class="error-validation template"></p>
  <!--tem que ficar no final do body pra dar "tempo" de carregar o HTML todo da tela-->
  <script src="../js/cadastro.js"></script>
</body>

</html>

<?php
//Realizando a conexão com o BD
include "conexao.php";



//Salvando os dados do formulário em suas respectivas variáveis
$nome = $dados['nome'];
$cpf = $dados['cpf'];
$datanasc = $dados['datanasc'];
$email = $dados['email'];
$senha = $dados['senha'];
$confirmasenha = $dados['confirmasenha'];
$rua = $dados['rua'];
$numero = $dados['numero'];

//Verificando se as senhas digitadas são iguais
if ($senha !== $confirmasenha) {
?>
  <script>
    alert("Favor digitar a senha corretamente");
  </script>
<?php
  return false;
} else {
  return true;
}

//INICIO DO ARMAZENAMENTO NO BANCO
//Verificando se já existe algum usuário no BD com o CPF digitado
$sql = "SELECT CPF FROM usuarios WHERE CPF = $cpf";
//Caso não tenha nenhum usuário já cadastrad com o CPF escolhido, o registro será inserido no BD
if ($this->query->RecordCount == 0) {
  $sql = "INSERT INTO usuarios (NOME, CPF, DATANASC, EMAIL, SENHA) VALUES ($nome, $cpf, $datanasc, $email, $senha)";
}

//Caso o CPF já esteja cadastrado no sistema, o usuário será redirecionado para a Tela de Login
else {
?>
  <script>
    alert("Este CPF já está cadastrado em nosso sistema, você será redirecionado para a área de Login");
  </script>
<?php
  header('Location:' . "login.php");
  return false;
}


?>