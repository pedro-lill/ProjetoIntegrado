<?php require_once("../includes/header.php");?>

<h1>Cadastro de produção</h1>

<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
          echo "<li>$e</li>";
      echo "</ul>";
  }

  //inseminacao
  //$codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
  $codInseminacao = isset($_POST['field_codInseminacao']) ? $_POST['field_codInseminacao'] : "";
  $dtInseminacao = isset($_POST['field_dtInseminacao']) ? $_POST['field_dtInseminacao'] : "";
  $touroInseminador = isset($_POST['field_touroInseminador']) ? $_POST['field_touroInseminador'] : "";
  $inseminadorResponsavel = isset($_POST['field_inseminadorResponsavel']) ? $_POST['field_inseminadorResponsavel'] : "";
  $retorno = isset($_POST['field_retorno']) ? $_POST['field_retorno'] : "";
  $obs = isset($_POST['field_obs']) ? $_POST['field_obs'] : "";
  $previsaoSecagem = isset($_POST['field_previsaoSecagem']) ? $_POST['field_previsaoSecagem'] : "";
  $previsaoParto = isset($_POST['field_previsaoParto']) ? $_POST['field_previsaoParto'] : "";
  $novaDtInseminacao = isset($_POST['field_novaDtInseminacao']) ? $_POST['field_novaDtInseminacao'] : "";
  $novaPrevisaoSecagem = isset($_POST['field_novaPrevisaoSecagem']) ? $_POST['field_novaPrevisaoSecagem'] : "";
  $novaPrevisaoParto = isset($_POST['field_novaPrevisaoParto']) ? $_POST['field_novaPrevisaoParto'] : "";

    ?>
</div>

      <form action="adicionar-ficha.php">
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