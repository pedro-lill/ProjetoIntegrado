<?php require_once("../includes/header.php");?>


    <div class="erro_cadastro">
      <?php
      if(isset($erros) && count($erros) !=0){
          echo "<ul>";
          foreach($erros as $e)
              echo "<li>$e</li>";
          echo "</ul>";
      }
      //fichas
      $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
      $dtNascimento = isset($_POST['field_dtNascimento']) ? $_POST['field_dtNascimento'] : "";
      $codMae = isset($_POST['field_codMae']) ? $_POST['field_codMae'] : "";
      $nomePai = isset($_POST['field_nomePai']) ? $_POST['field_nomePai'] : "";
      $estadoVida = isset($_POST['field_estadoVida']) ? $_POST['field_estadoVida'] : "";

        ?>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
      <div>
        <h1>Adicionar ficha de animal</h1>
        <input type="number" placeholder="Código do animal" name="field_codAnimal" autofocus value="<?=$codAnimal ?>" required>
        <input type="date" name="field_dtNascimento" size="100" maxlength="100" id="id_dtNascimento" value="<?=$dtNascimento?>" required>
        <input type="number" placeholder="Código mae" name="field_codMae" size="100" maxlength="100" id="id_codMae" value="<?=$codMae?>" required>
        <input type="text" placeholder="Nome do touro-pai" name="field_nomePai" size="50" maxlength="50" id="id_nomePai" value="<?=$nomePai?>" required>
        <input type="number" placeholder="Estado de vida" name="field_estadoVida" size="50" maxlength="50" id="id_estadoVida" value="<?=$estadoVida?>" required>
        <input type="file" name="field_imagem" id="id_imagem" required>
        <button class="button-form" type="submit">Salvar</button>
      </div>
    </form>

  <?php require_once("../includes/footer.php");?>