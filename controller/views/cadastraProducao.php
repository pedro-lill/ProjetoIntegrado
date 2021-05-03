<?php require_once("../includes/header.php");?>

<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
          echo "<li>$e</li>";
      echo "</ul>";
  }

  //$codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
  $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
  $dtColeta = isset($_POST['field_dtColeta']) ? $_POST['field_dtColeta'] : "";
  $litros = isset($_POST['field_litros']) ? $_POST['field_litros'] : "";
  $periodoDia = isset($_POST['field_periodoDia']) ? $_POST['field_periodoDia'] : "";

    ?>
</div>

      <form action="" method="post" enctype="multipart/form-data">
        <div>
          <h1>Cadastro de produção</h1>
          <input type="number" placeholder="Código do animal" name="field_codAnimal" autofocus value="<?=$codAnimal ?>" required>
          <input type="datetime-local" name="field_dtColeta" maxlength="100" id="id_dtColeta" value="<?=$dtColeta?>" required>
          <input type="number" step="0.01" placeholder="Produção em Litros" name="field_litros" autofocus value="<?=$litros?>" required>
          <select required>
            <option  name="field_periodoDia" value="manha" autofocus value="<?=$periodoDia?>">Manhã</option>
            <option  name="field_periodoDia" value="tarde" autofocus value="<?=$periodoDia?>">Tarde</option>
          </select>
            <button name="adiciona" class="button-form" type="submit">Salvar</button>
        </div>
      </form>

      <?php require_once("../includes/footer.php");?>