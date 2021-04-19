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

  <a class="logo-mst"><img title="Logo do mst" src="/img/mst.png"/></a>

  <form  action="telaInicial.php" onsubmit="return validar()">
    <div class="container-login">
      <input type="text" placeholder="Enter Username" name="username" required>
      <input type="password" placeholder="Enter Password" name="password" required>
      <button class="button-form" type="submit" onclick="validacaoLogin()">Login</button>
    </div>
  </form>

  <script src="/js/login.js"></script>

</body>

</html>