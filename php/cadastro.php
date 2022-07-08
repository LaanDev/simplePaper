<?php
//Realizando a conexão com o BD
include "conexao.php";
?>
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
    <form id="register-form" action="" method="post">
      <h2 id="subtopico">Dados Pessoais</h2>
      <div class="box100">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php if (isset($nome)) echo $nome; ?>" placeholder="Digite seu nome completo" data-min-length="3">
      </div>
      <div class="box45 espacamento">
        <label for="CPF">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>" placeholder="Digite seu CPF">
      </div>
      <div class="box45">
        <label for="datanasc">Data de Nascimento</label>
        <input type="date" name="datanasc" id="datanasc">
      </div>
      <div class="box55 espacamento">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="Digite seu email" autocomplete="off">
      </div>
      <div class="box35">
        <label for="nacionalidade">Nacionalidade</label>
        <input type="text" name="nacionalidade" id="nacionalidade" value="<?php echo $nacionalidade; ?>" placeholder="Digite sua nacionalidade">
      </div>
      <div class="box45 espacamento">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $telefone; ?>" placeholder="Digite seu telefone Ex: (xx) 9 XXXX-XXXX">
      </div>
      <div class="box45">
        <label for="profissao">Profissão</label>
        <input type="text" name="profissao" id="profissao" value="<?php echo $profissao; ?>" placeholder="Digite sua profissão">
      </div>
      <div class="box45 espacamento">
        <label for="area_atuacao">Área de Atuação</label>
        <input type="text" name="area_atuacao" id="area_atuacao" value="<?php echo $area_atuacao; ?>" placeholder="Digite sua área de atuação">
      </div>
      <div class="box45">
        <label for="nivel_graduacao">Nível de Graduação</label>
        <input type="text" name="nivel_graduacao" id="nivel_graduacao" value="<?php echo $nivel_graduacao; ?>" placeholder="Digite seu nível de graduação">
      </div>
      <div class="box45 espacamento">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="<?php echo $senha; ?>" placeholder="Digite sua senha">
      </div>
      <div class="box45">
        <label for="confirmasenha">Confirma senha</label>
        <input type="password" name="confirmasenha" id="confirmasenha" value="<?php echo $confirmasenha; ?>" placeholder="Confirme sua senha">
      </div>
      <h2 class="box100" id="subtopico">Dados do Endereço</h2>
      <div class="box55 espacamento">
        <label for="rua">Rua</label>
        <input type="text" name="rua" id="rua" value="<?php echo $rua; ?>" placeholder="Digite sua rua">
      </div>
      <div class="box35">
        <label for="numero">Número</label>
        <input type="text" name="numero" id="numero" value="<?php echo $numero; ?>" placeholder="Digite o número da sua casa">
      </div>
      <div class="box45 espacamento">
        <label for="complemento">Complemento</label>
        <input type="text" name="complemento" id="complemento" value="<?php echo $complemento; ?>" placeholder="Digite o complemento da sua rua">
      </div>
      <div class="box45">
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" value="<?php echo $bairro; ?>" placeholder="Digite seu Bairro">
      </div>
      <div class="box25 espacamento">
        <label for="cep">CEP</label>
        <input type="text" name="cep" id="cep" value="<?php echo $cep; ?>" placeholder="Digite seu CEP">
      </div>
      <div class="box40 espacamento">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" value="<?php echo $cidade; ?>" placeholder="Digite sua Cidade">
      </div>
      <div class="box25">
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado" value="<?php echo $estado; ?>" placeholder="Digite seu Estado">
      </div>
      <div class="box100">
        <input type="checkbox" name="termos" id="termos">
        <label for="termos" id="termos-label">Eu li e aceito os <a href="termos.php">termos de uso</a></label>
      </div>
      <input type="submit" id="btn-submit" value="Cadastrar" name="cadastrar">

    </form>
  </div>

  <p class="error-validation template"></p>
  <!--tem que ficar no final do body pra dar "tempo" de carregar o HTML todo da tela-->


</html>


<?php


//Salvando os dados do formulário em suas respectivas variáveis
if (isset($_POST['cadastrar'])) {
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $datanasc = $_POST['datanasc'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $confirmasenha = $_POST['confirmasenha'];
  $nacionalidade = $_POST['nacionalidade'];
  $profissao = $_POST['profissao'];
  $area_atuacao = $_POST['area_atuacao'];
  $nivel_graduacao = $_POST['nivel_graduacao'];
  $rua = $_POST['rua'];
  $numero = $_POST['numero'];
  $complemento = $_POST['complemento'];
  $bairro = $_POST['bairro'];
  $cep = $_POST['cep'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
} else {
  $nome = '';
  $cpf = '';
  $datanasc = '';
  $telefone = '';
  $email = '';
  $senha = '';
  $confirmasenha = '';
  $nacionalidade = '';
  $profissao = '';
  $area_atuacao = '';
  $nivel_graduacao = '';
  $rua = '';
  $numero = '';
  $complemento = '';
  $bairro = '';
  $cep = '';
  $cidade = '';
  $estado = '';
}

exit($nome);


//Verificando se as senhas digitadas são iguais
if ($senha !== $confirmasenha) {
?>
  <script>
    alert("Favor digitar a senha corretamente");
    document.getElementById('senha').style.borderColor = "red";
  </script>
<?php
  return false;
} else {
?>
  <script>
    document.getElementById('senha').style.borderColor = "#228B22";
  </script>
<?php
}

if ($nome == null | $nome == '') {
?>
  <script>
    document.getElementById('senha').style.borderColor = "red";
    document.getElementById('confirmasenha').style.borderColor = "red";
  </script>
<?php
  return false;
} else {
?>
  <script>
    document.getElementById('senha').style.borderColor = "#228B22";
    document.getElementById('confirmasenha').style.borderColor = "#228B22";
  </script>
<?php
}


//INICIO DO ARMAZENAMENTO NO BANCO
//Verificando se já existe algum usuário no BD com o CPF digitado
$sql = "SELECT CPF FROM usuarios WHERE CPF = $cpf";
//Rodando a query acima :D
if ($qr = mysqli_query($conn, $sql)) {
  $last_id = mysqli_insert_id($conn);
  $qr_usuarios = mysqli_fetch_array($qr);
} else {
  echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

//Caso o usuário ainda não tenha registro no banco, ele será inserido
if (mysqli_num_rows($qr) == 0) {
  //Adicionando os registros no banco caso o usuario ainda nao tenha registro
  $sql = "INSERT INTO usuarios (NOME, CPF, DATANASC, TELEFONE, EMAIL, SENHA, NACIONALIDADE, PROFISSAO, AREA_ATUACAO, NIVEL_GRADUACAO, RUA, NUMERO, COMPLEMENTO, BAIRRO, CEP, ESTADO) 
  VALUES($nome, $cpf, $datanasc, $telefone, $email, $senha, $nacionalidade, $profissao, $area_atuacao, $nivel_graduacao, $rua, $numero, $complemento, $bairro, $cep, $estado)";
  //Caso não tenha nenhum usuário já cadastrad com o CPF escolhido, o registro será inserido no BD
  if ($qr = mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    $qr_usuarios = mysqli_fetch_array($qr);
  } else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
  }
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