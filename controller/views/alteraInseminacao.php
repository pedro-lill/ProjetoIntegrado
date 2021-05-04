<main>

  <div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
    echo "<ul>";
    foreach($erros as $e)
      echo "<li>$e</li>";
    echo "</ul>";
  }
  $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $inseminacao->getCodAnimal();
  $codInseminacao = isset($_POST['field_codInseminacao']) ? $_POST['field_codInseminacao'] : $inseminacao->getCodInseminacao();
  $dtInseminacao = isset($_POST['field_dtInseminacao']) ? $_POST['field_dtInseminacao'] : $inseminacao->getDtInseminacao();
  $touroInseminador = isset($_POST['field_touroInseminador']) ? $_POST['field_touroInseminador'] : $inseminacao->getTouroInseminador();
  $inseminadorResponsavel = isset($_POST['field_inseminadorResponsavel']) ? $_POST['field_inseminadorResponsavel'] : $inseminacao->getInseminadorResponsavel();
  $retorno = isset($_POST['field_retorno']) ? $_POST['field_retorno'] : $inseminacao->getRetorno();
  $obs = isset($_POST['field_obs']) ? $_POST['field_obs'] : $inseminacao->getObs();
  //$previsaoSecagem = isset($_POST['field_previsaoSecagem']) ? $_POST['field_previsaoSecagem'] : $inseminacao->get;
  //$previsaoParto = isset($_POST['field_previsaoParto']) ? $_POST['field_previsaoParto'] : $inseminacao->get;
  $novaDtInseminacao = isset($_POST['field_novaDtInseminacao']) ? $_POST['field_novaDtInseminacao'] : $inseminacao->getNovaDtInseminacao();
  //$novaPrevisaoSecagem = isset($_POST['field_novaPrevisaoSecagem']) ? $_POST['field_novaPrevisaoSecagem'] : $inseminacao->get;
  //$novaPrevisaoParto = isset($_POST['field_novaPrevisaoParto']) ? $_POST['field_novaPrevisaoParto'] : $inseminacao->get;
  ?>
  </div>

  <?php require_once("../includes/header.php");?>

    <form action="" method="post" enctype="multipart/form-data">
      <div class="container-ficha">
      <h1>Dados da ficha </h1>
      <input type="hidden" name="field_codAnimal" value="<?=$codAnimal?>" > 
      <input type="hidden" name="field_codInseminacao" value="<?=$codInseminacao?>" > 

      <input type="datetime-local" name="field_dtInseminacao" size="100" maxlength="100" id="id_dtInseminacao" value="<?=$dtInseminacao?>" required> 
      <input type="text" placeholder="Nome do touro inseminador"  name="field_touroInseminador" size="100" maxlength="100" id="id_touroInseminador" value="<?=$touroInseminador?>"required>
      <input type="text" placeholder="Inseminador responsável" name="field_inseminadorResponsavel" size="100" maxlength="100" id="id_inseminadorResponsavel" value="<?=$inseminadorResponsavel?>" required>
      <input type="text" placeholder="Retorno" name="field_retorno" size="100" maxlength="100" id="id_retorno" value="<?=$retorno?>">
      <input type="datetime-local" name="field_novaDtInseminacao" size="100" maxlength="100" id="id_novaDtInseminacao" value="<?=$novaDtInseminacao?>"> <!--data de retorno da nova inseminacao-->
      <input type="text" placeholder="Observação" name="field_obs" size="100" maxlength="100" id="id_obs" value="<?=$obs?>">
      <button name="altera" class="button-form" type="submit">Alterar</button>
    </div>
  </form>
