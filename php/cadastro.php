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
        <label for="nivel_graduacao">Nível de Graduação</label>
        <input type="text" name="nivel_graduacao" id="nivel_graduacao" value="<?php if (isset($nivel_graduacao)) echo $nivel_graduacao; ?>" placeholder="Digite seu nível de graduação">
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


<?php


//Verificando se o botão "CADASTRAR" foi clicado
if (isset($_POST['cadastrar'])) {

  if ($_POST['nome'] != null && $_POST['nome'] != '') {
    $nome = $_POST['nome'];
  } else {
    //$nome = "NULL";
  }

  if ($_POST['cpf'] != null && $_POST['cpf'] != '') {
    $cpf = $_POST['cpf'];
  } else {
    //$cpf = "NULL";
  }

  if ($_POST['datanasc'] != null && $_POST['datanasc'] != '') {
    $datanasc = $_POST['datanasc'];
  } else {
    //$datanasc = "NULL";
  }

  if ($_POST['telefone'] != null && $_POST['telefone'] != '') {
    $telefone = $_POST['telefone'];
  } else {
    //$telefone = "NULL";
  }

  if ($_POST['email'] != null && $_POST['email'] != '') {
    $email = $_POST['email'];
  } else {
    //$email = "NULL";
  }

  if ($_POST['senha'] != null && $_POST['senha'] != '') {
    $senha = $_POST['senha'];
  } else {
    //$senha = "NULL";
  }

  if ($_POST['confirmasenha'] != null && $_POST['confirmasenha'] != '') {
    $confirmasenha = $_POST['confirmasenha'];
  } else {
    //$confirmasenha = "NULL";
  }

  if ($_POST['nacionalidade'] != null && $_POST['nacionalidade'] != '') {
    $nacionalidade = $_POST['nacionalidade'];
  } else {
    //$nacionalidade = "NULL";
  }

  if ($_POST['profissao'] != null && $_POST['profissao'] != '') {
    $profissao = $_POST['profissao'];
  } else {
    //$profissao = "NULL";
  }

  if ($_POST['area_atuacao'] != null && $_POST['area_atuacao'] != '') {
    $area_atuacao = $_POST['area_atuacao'];
  } else {
    //$area_atuacao = "NULL";
  }

  if ($_POST['nivel_graduacao'] != null && $_POST['nivel_graduacao'] != '') {
    $nivel_graduacao = $_POST['nivel_graduacao'];
  } else {
    //$nivel_graduacao = "NULL";
  }

  if ($_POST['rua'] != null && $_POST['rua'] != '') {
    $rua = $_POST['rua'];
  } else {
    //$rua = "NULL";
  }

  if ($_POST['numero'] != null && $_POST['numero'] != '') {
    $numero = $_POST['numero'];
  } else {
    //$numero = "NULL";
  }

  if ($_POST['complemento'] != null && $_POST['complemento'] != '') {
    $complemento = $_POST['complemento'];
  } else {
    //$complemento = "NULL";
  }

  if ($_POST['bairro'] != null && $_POST['bairro'] != '') {
    $bairro = $_POST['bairro'];
  } else {
    //$bairro = "NULL";
  }

  if ($_POST['cep'] != null && $_POST['cep'] != '') {
    $cep = $_POST['cep'];
  } else {
    //$cep = "NULL";
  }

  if ($_POST['cidade'] != null && $_POST['cidade'] != '') {
    $cidade = $_POST['cidade'];
  } else {
    //$cidade = "NULL";
  }

  if ($_POST['estado'] != null && $_POST['estado'] != '') {
    $estado = $_POST['estado'];
  } else {
    //$estado = "NULL";
  }


  $flag = 0;
  //Verificando se as senhas digitadas são iguais
  if ($senha != $confirmasenha) {
?>
    <script>
      document.getElementById('senha').style.borderColor = "red";
    </script>
  <?php
    //setando uma flag para marcar quando algum campo não esta preenchido corretamente
    $flag = 1;
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
      document.getElementById('nome').style.borderColor = "red";
    </script>
  <?php
    //setando uma flag para marcar quando algum campo não esta preenchido corretamente
    $flag = 1;
  } else {
  ?>
    <script>
      document.getElementById('nome').style.borderColor = "#228B22";
    </script>
  <?php
  }

  if ($cpf == null | $cpf == '') {
  ?>
    <script>
      document.getElementById('cpf').style.borderColor = "red";
    </script>
  <?php
    //setando uma flag para marcar quando algum campo não esta preenchido corretamente
    $flag = 1;
  } else {
  ?>
    <script>
      document.getElementById('cpf').style.borderColor = "#228B22";
    </script>
<?php
  }

  if (!isset($_POST['termos'])) {
    echo  "<script>alert('Favor ler os Termos de uso!');</script>";
    return false;
  }

  //verificando se a flag está preenchida com 1 = houve algum erro de preenchimento do formulário
  if ($flag == 1) {
    echo  "<script>alert('Favor preencher os campos corretamente!');</script>";
    return false;
  }


  //INICIO DO ARMAZENAMENTO NO BANCO
  //Verificando se já existe algum usuário no BD com o CPF digitado
  $sql = "SELECT CPF FROM usuarios WHERE CPF = $cpf";
  // //Rodando a query acima :D
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
    exit($sql);
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
    echo "<script>alert('Este CPF já está cadastrado em nosso sistema, você será redirecionado para a área de Login')</script>";

    return false;
    //Tentar solucionar o erro: Warning: Cannot modify header information - headers already sent by (output started at D:\xampp\htdocs\SimplePaper\simplePaper\php\cadastro.php:92) in D:\xampp\htdocs\SimplePaper\simplePaper\php\cadastro.php on line 324
    //header('Location: login.php');
  }
}



?>