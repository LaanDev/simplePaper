<?php ?>
//HTML da página de cadastro
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimplePaper - Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

  <link rel="stylesheet" href="../css/style_login.css">
</head>

<body>
  <div id="login-container">
    <h1>Login</h1>
    <form action="">
      <label for="email">E-mail</label>
      <input type="email" name="email" placeholder="Digite seu email" autocomplete="off">
      <label for="password">Senha</label>
      <input type="password" name="senha" placeholder="Digite sua senha">
      <a href="redefinirsenha.php" id="forgot-password">Esqueceu a senha?</a>
      <input type="submit" value="Entrar">
    </form>
    <div id="register-container">
      <p>Ainda não tem uma conta?</p>
      <a href="cadastro.php">Registrar</a>

    </div>
  </div>
</body>

</html>

<?php
