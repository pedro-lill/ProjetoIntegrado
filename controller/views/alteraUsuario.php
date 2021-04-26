<main>

    <div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
        echo "<ul>";
        foreach($erros as $e)
          echo "<li>$e</li>";
        echo "</ul>";
    }

    $nomeLogin = isset($_POST['field_nomeLogin']) ? $_POST['field_nomeLogin'] : $usuario->getNomeLogin();
    $senha = isset($_POST['field_senha']) ? $_POST['field_senha'] : $usuario->getSenha();
    ?>
    </div>
    
    <?php require_once("../includes/header.php");?>

    <form  action="" method="post" enctype="multipart/form-data">
    <div class="container-login">
      <input type="text" placeholder="Login" name="field_nomeLogin" value="<?=$nomeLogin ?>" required>
      <input type="password" placeholder="Senha" name="field_senha" value="<?=$senha ?>" required>
      <input type="password" placeholder="Confirmar senha" name="password-confirm" value="<?=$senha ?>" required>
      <button class="button-form" type="submit">Cadastrar</button>
      <div class="login-a"><a href="acessoUsuario.php">Voltar ao login</a></div>
    </div>
  </form>
