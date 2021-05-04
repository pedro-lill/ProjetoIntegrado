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
      <div>
        <label class="label-cadastra" for="id_login">Login</label>
        <input type="text" id="id_login" name="field_nomeLogin" value="<?=$nomeLogin ?>" required>
      </div>
      <div>
        <label class="label-cadastra" for="id_senha">Senha</label>
        <input type="password" id="id_senha" name="field_senha" value="<?=$senha ?>" required>
      </div>
      <div>
        <label class="label-cadastra" for="id_senhaConfirma">Confirmar senha</label>
        <input type="password" name="senha-confirmar" id="id_senhaConfirma" value="<?=$senha ?>" required>
      </div>

      <button name="adiciona" class="button-form" type="submit">Cadastrar</button>
      <div class="login-a"><a href="acessoUsuario.php">Voltar ao login</a></div>
    </div>
  </form>
