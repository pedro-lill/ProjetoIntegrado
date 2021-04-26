<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
          echo "<li>$e</li>";
      echo "</ul>";
  }

  $nomeLogin = isset($_POST['field_nomeLogin']) ? $_POST['field_nomeLogin'] : "";
  $senha = isset($_POST['field_senha']) ? $_POST['field_senha'] : "";
    ?>
</div>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/mst.png">

    <meta name="author" content="Fabrício Romani e Pedro Lill">
    <meta name="description" content="Cooptar - cooperativa agropecuária">
    <meta name="keywords" content="mst, cooperativa, pontão, agropecuária, bovino">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/login.css">

    <title>Cadastro - COOPTAR</title>

</head>

<body>

  <div class="logo-mst"><img title="Logo do mst" src="../../img/mst.png"/></div>

  <form  action="" onsubmit="return validarCadastro()">
    <div class="container-login">
      <input type="text" placeholder="Login" name="field_nomeLogin" required>
      <input type="password" placeholder="Senha" name="field_senha" required>
      <input type="password" placeholder="Confirmar senha" name="password-confirm" required>
      <button class="button-form" type="submit">Cadastrar</button>
      <div class="login-a"><a href="../../index.php">Voltar ao login</a></div>
    </div>
  </form>

</body>

</html>