<main>

  <div class="erro_cadastro">
  <?php
    if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
        echo "<li>$e</li>";
    }
    $nomeLogin = isset($_POST['field_nomeLogin']) ? $_POST['field_nomeLogin'] : "";
    $senha = isset($_POST['field_senha']) ? $_POST['field_senha'] : "";
  ?>
  </div>
    
<?php require_once("../includes/header.php");?>

<form  class="container-login" action="" method="post" enctype="multipart/form-data">
  <div class="div-inteira">
    <label class="label-cadastra" for="id_login">Login</label>
    <input type="text" id="id_login" name="field_nomeLogin" value="<?=$nomeLogin ?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_senha">Senha</label>
    <input type="password" id="id_senha" name="field_senha" value="<?=$senha ?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_senhaConfirma">Confirmar senha</label>
    <input type="password" name="senha-confirmar" id="id_senhaConfirma" value="<?=$senha ?>" required>
  </div>
  <button name="adiciona" class="button-form" type="submit">Cadastrar</button>
  <div class="login-a"><a href="../views/configuracoes.php">Voltar</a></div>
</form>