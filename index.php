<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../img/mst.png">
  <meta name="author" content="Fabrício Romani e Pedro Lill">
  <meta name="description" content="Cooptar - cooperativa agropecuária">
  <meta name="keywords" content="mst, cooperativa, pontão, agropecuária, bovino">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="stylesheet" href="/css/adicionar-animal.css">
  <title>LOGIN</title>
</head>

<body>

  <br>
  <br>
  <br>
  <br>

  <div class="logo-mst"><img title="Logo do mst" src="/img/mst.png"/></div>

  <form  action="/views/previsoes.php" class="container-historicos" onsubmit="return validarLogin()">
    <div class="div-inteira">
      <label class="label-cadastra" for="id_nomeLogin">Login</label>
      <input type="text" id="id_nomeLogin" name="field_nomeLogin" value="" required>
    </div>
    <div class="div-inteira">
      <label class="label-cadastra" for="id_senha">Senha</label>
      <input type="password" id="id_senha" name="field_senha" value="" required>
    </div>
    <button class="button-form" type="submit">Login</button>
  </form>

  <script src="/js/login.js"></script>

</body>
</html>