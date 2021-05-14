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
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
    $dtInseminacao = isset($_POST['field_dtInseminacao']) ? $_POST['field_dtInseminacao'] : "";
    $touroInseminador = isset($_POST['field_touroInseminador']) ? $_POST['field_touroInseminador'] : "";
    $inseminadorResponsavel = isset($_POST['field_inseminadorResponsavel']) ? $_POST['field_inseminadorResponsavel'] : "";
    $retorno = isset($_POST['field_retorno']) ? $_POST['field_retorno'] : "";
    $obs = isset($_POST['field_obs']) ? $_POST['field_obs'] : "";
    //$previsaoSecagem = isset($_POST['field_previsaoSecagem']) ? $_POST['field_previsaoSecagem'] : "";
    //$previsaoParto = isset($_POST['field_previsaoParto']) ? $_POST['field_previsaoParto'] : "";
    $novaDtInseminacao = isset($_POST['field_novaDtInseminacao']) ? $_POST['field_novaDtInseminacao'] : "";
    //$novaPrevisaoSecagem = isset($_POST['field_novaPrevisaoSecagem']) ? $_POST['field_novaPrevisaoSecagem'] : "";
    //$novaPrevisaoParto = isset($_POST['field_novaPrevisaoParto']) ? $_POST['field_novaPrevisaoParto'] : "";
    ?>
  </div>

  <form action="" class="container-historicos" method="post" enctype="multipart/form-data">
      <h2>CADASTRO DE INSEMINAÇÃO</h2>
      <div>
        <label class="label-cadastra" for="id_codAnimal">Código do animal </label>
        <input type="number" name="field_codAnimal" id="id_codAnimal" value="<?=$codAnimal?>" > 
      </div>
      <div>
        <label class="label-cadastra" for="id_dtInseminacao">Data de inseminação </label>
        <input type="date" name="field_dtInseminacao" id="id_dtInseminacao" value="<?=$dtInseminacao?>" > 
      </div>
      <div>
        <label class="label-cadastra" for="id_touroInseminador">Touro inseminador </label>
        <input type="text"  name="field_touroInseminador" maxlength="100" id="id_touroInseminador" value="<?=$touroInseminador?>"required>
      </div>
      <div>
        <label class="label-cadastra" for="id_touroInseminador">Inseminador responsável </label>
        <input type="text" name="field_inseminadorResponsavel" maxlength="100" id="id_inseminadorResponsavel" value="<?=$inseminadorResponsavel?>" required>
      </div>
      <div>
        <label class="label-cadastra" for="id_retorno">Retorno </label>
        <select name="field_retorno" id="id_retorno" onChange="retorno()" required >
              <option value="Não" value="<?=$retorno?>">Não</option>
              <option value="Sim" value="<?=$retorno?>">Sim</option>
        </select>
      </div>
      <div>
        <label class="label-cadastra" for="id_novaDtInseminacao" id="id_novaDtInseminacao_label">Nova data de inseminação: </label>
        <input type="hidden" name="field_novaDtInseminacao" id="id_novaDtInseminacao" value="<?=$novaDtInseminacao?>"> <!--data de retorno da nova inseminacao-->
      </div>
      <div>
        <label class="label-cadastra" for="id_obs">Observação: </label>
        <input type="text" name="field_obs" maxlength="100" id="id_obs" value="<?=$obs?>">
      </div>
      <!--previsao de parto-->
      <!--previsao de secagem-->
      <button name="adiciona" class="button-form" type="submit">Salvar</button>
  </form>
  <script src="../js/script.js"></script>
<?php require_once("../includes/footer.php");?>