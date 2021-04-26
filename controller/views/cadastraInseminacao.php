<?php require_once("../includes/header.php");?>

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
            <h1>Adicionar histórico de inseminação</h1>
            <input type="number" placeholder="Código da vaca"  name="field_codAnimal" size="100" maxlength="100" id="id_codAnimal" value="<?=$codAnimal?>" required>
            <input type="date" name="field_dtInseminacao" size="100" maxlength="100" id="id_dtInseminacao" value="<?=$dtInseminacao?>" required> 
            <input type="text" placeholder="Nome do touro inseminador"  name="field_touroInseminador" size="100" maxlength="100" id="id_touroInseminador" value="<?=$touroInseminador?>"required>
            <input type="text" placeholder="Inseminador responsável" name="field_inseminadorResponsavel" size="100" maxlength="100" id="id_inseminadorResponsavel" value="<?=$inseminadorResponsavel?>" required>
            <input type="text" placeholder="Retorno" name="field_retorno" size="100" maxlength="100" id="id_retorno" value="<?=$retorno?>">
            <input type="date" name="field_novaDtInseminacao" size="100" maxlength="100" id="id_novaDtInseminacao" value="<?=$novaDtInseminacao?>"> <!--data de retorno da nova inseminacao-->
            <input type="text" placeholder="Observação" name="field_obs" size="100" maxlength="100" id="id_obs" value="<?=$obs?>">
            <!--previsao de parto-->
            <!--previsao de secagem-->
            <button class="button-form" type="submit">Salvar</button>
          </div>
        </form>

        <?php require_once("../includes/footer.php");?>