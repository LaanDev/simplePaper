<?php
//Realizando a conexão com o BD
include "conexao.php";

?>
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
        <label for="nomeconf">Nome da Conferência</label>
        <input type="text" name="nomeconf" id="nomeconf" value="<?php if (isset($nome)) echo $nome; ?>" placeholder="Digite o nome da conferência" data-min-length="3">
      </div>
      <div class="box45 espacamento">
        <label for="datainicioconf">Data de Início da Conferência</label>
        <input type="date" name="datainicioconf" id="datainicioconf">
      </div>
      <div class="box45">
        <label for="datafimconf">Data de Fim da Conferência</label>
        <input type="date" name="datafimconf" id="datafimconf">
      </div>
      <div class="box100">
        <input type="checkbox" name="termos" id="termos">
        <label for="termos" id="termos-label">Eu li e aceito os <a href="termos.php">termos de uso</a></label>
      </div>
      <input type="submit" id="btn-submit-conf" value="Cadastrar Conferência" name="cadastrarconf" onclick="clique()">

    </form>
  </div>

  <p class="error-validation template"></p>
  <!--tem que ficar no final do body pra dar "tempo" de carregar o HTML todo da tela-->


</html>

<?php

if (isset($_POST['cadastrarconf'])) {
  if ($_POST['nomeconf'] != null && $_POST['nomeconf'] != '') {
    $nomeconf = $_POST['nomeconf'];
?>
    <script>
      document.getElementById('nomeconf').style.borderColor = "#228B22";
    </script>
  <?php
  } else {
    $nomeconf = "";
  ?>
    <script>
      document.getElementById('nomeconf').style.borderColor = "red";
    </script>
  <?php
    //setando uma flag para marcar quando algum campo não esta preenchido corretamente 
    //OBS: usar apenas em campos obrigatórios
    $flag = 1;
  }

  if ($_POST['datainicioconf'] != null && $_POST['datainicioconf'] != '') {
    $datainicio = $_POST['datainicioconf'];
  ?>
    <script>
      document.getElementById('datainicioconf').style.borderColor = "#228B22";
    </script>
  <?php
  } else {
    $datainicio = "";
  ?>
    <script>
      document.getElementById('datainicioconf').style.borderColor = "red";
    </script>
  <?php
    //setando uma flag para marcar quando algum campo não esta preenchido corretamente 
    //OBS: usar apenas em campos obrigatórios
    $flag = 1;
  }

  if ($_POST['datafimconf'] != null && $_POST['datafimconf'] != '') {
    $datafim = $_POST['datafimconf'];
  ?>
    <script>
      document.getElementById('datafimconf').style.borderColor = "#228B22";
    </script>
  <?php
  } else {
    $datafim = "";
  ?>
    <script>
      document.getElementById('datafimconf').style.borderColor = "red";
    </script>
<?php
    //setando uma flag para marcar quando algum campo não esta preenchido corretamente 
    //OBS: usar apenas em campos obrigatórios
    $flag = 1;
  }


  if (!isset($_POST['termos'])) {
    echo  "<script>alert('Favor ler os Termos de uso!');</script>";
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
    //Gravando a data em que a conferência foi criada
    $datacriacao = date("d-m-Y");
    exit($datacriacao);
    //Adicionando os registros no banco caso o usuario ainda nao tenha registro
    $sql = "INSERT INTO conferencia (NOME, DATAINICIO, DATAFIM, DATACRIACAO) VALUES('$nomeconf', '$datainicio', '$datafim', '$datacriacao')";
    //exit($sql);
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