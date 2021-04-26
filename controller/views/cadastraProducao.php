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
          <h1>Adicionar histórico de produção de leite</h1>
          <input type="number" placeholder="Código do animal" required>
          <input type="date" required>
          <input type="number" step="0.01" placeholder="Produção em Litros" required>
          <select name="periodoDia" required>
            <option value="manha">Manhã</option>
            <option value="tarde">Tarde</option>
          </select>
          <button class="button-form" type="submit">Salvar</button>
        </div>
      </form>

      <?php require_once("../includes/footer.php");?>