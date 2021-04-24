<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/img/mst.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login - COOPTAR</title>
</head>

<body>

  <div class="logo-mst"><img title="Logo do mst" src="/img/mst.png"/></div>

  <form  action="views/previsoes.php" onsubmit="return validarLogin()">
    <div class="container-login">
      <input type="text" placeholder="Login" name="username" required>
      <input type="password" placeholder="Senha" name="password" required>
      <button class="button-form" type="submit">Login</button>
      <a href="cadastrar-usuario.php">Cadastrar novo usuario</a>
    </div>
  </form>

  <script src="/js/login.js"></script>

</body>

</html>