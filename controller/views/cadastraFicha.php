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
      $nomeImagem = isset($_FILES['field_imagem'])?($_FILES['field_imagem']) : "";

        ?>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
      <div>
        <h1>Cadastro de ficha de animal</h1>
        <div>
          <label class="label" for="id_codAnimal">Código do animal: </label>
          <input type="number" name="field_codAnimal" id="id_codAnimal" autofocus value="<?=$codAnimal ?>" required>
        </div>
        <div>
          <label class="label" for="id_dtNascimento">Data de nascimento: </label>
          <input type="datetime-local" name="field_dtNascimento" maxlength="100" id="id_dtNascimento" value="<?=$dtNascimento?>" required>
        </div>
        <div>
          <label class="label" for="id_codMae">Código da vaca-mãe: </label>
          <input type="number" name="field_codMae" maxlength="100" id="id_codMae" value="<?=$codMae?>" required>
        </div>
        <div>
          <label class="label" for="id_nomePai">Nome do touro-pai: </label>
          <input type="text" name="field_nomePai" maxlength="50" id="id_nomePai" value="<?=$nomePai?>" required>
        </div>
        <div>
          <label class="label" for="id_estadoVida">Estado de vida </label>
          <input type="number" name="field_estadoVida" maxlength="50" id="id_estadoVida" value="<?=$estadoVida?>" required>
        </div>
        <div>
          <label class="label" for="id_nomeImagem">Imagem do animal: </label>
          <input type="file" name="field_imagem" id="id_imagem" maxlength="50" id="id_nomeImagem" autofocus value="<?=$nomeImagem?>" required>
        </div>
        <button name="adiciona" class="button-form" type="submit">Salvar</button>
      </div>
    </form>

  <?php require_once("../includes/footer.php");?>