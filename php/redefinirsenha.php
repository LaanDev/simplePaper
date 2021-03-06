<?php ?>
//HTML da página de cadastro
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimplePaper - Redefinir Senha</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

  <link rel="stylesheet" href="../css/style_redefinirsenha.css">
</head>

<body>
  <div id="redefinir-container">
    <h1>Redefinir Senha</h1>
    <h2>Enviaremos um e-mail para você com os passos necessários para redefinir a sua senha.</h2>
    <form action="">
      <label for="email">E-mail</label>
      <input type="email" name="email" placeholder="Digite seu email" autocomplete="off">
      <label for="email">Confirme seu e-mail</label>
      <input type="email" name="email" placeholder="Digite seu email" autocomplete="off">
      <input type="submit" value="Enviar">
      <div id="voltalogin-container">
        <p>Não esqueceu a senha?</p>
        <a href="login.php" id="login">Clique aqui</a>
        <p> para voltar para a tela de login.</p>
      </div>
    </form>
  </div>
</body>

</html>

<?php
