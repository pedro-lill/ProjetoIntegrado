<?php require_once("../includes/header.php");?>

<div class="erro_cadastro">
  <?php
    if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
        echo "<li>$e</li>";
    }
    $codAnimalPadrao = isset($_GET['codAnimal']) ? $_GET['codAnimal'] : "" ;
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $codAnimalPadrao;
    $dtInseminacao = isset($_POST['field_dtInseminacao']) ? $_POST['field_dtInseminacao'] : date("Y-m-d");
    $touroInseminador = isset($_POST['field_touroInseminador']) ? $_POST['field_touroInseminador'] : "";
    $inseminadorResponsavel = isset($_POST['field_inseminadorResponsavel']) ? $_POST['field_inseminadorResponsavel'] : "";
    $retorno = isset($_POST['field_retorno']) ? $_POST['field_retorno'] : "";
    $obs = isset($_POST['field_obs']) ? $_POST['field_obs'] : "";
?>
</div>

<form action="" class="container-historicos" method="post" enctype="multipart/form-data">

  <h2>CADASTRO DE INSEMINAÇÃO</h2>
  
  <div class="div-metade">
    <label class="label-cadastra" for="id_codAnimal">Código do animal </label>
    <input type="number" name="field_codAnimal" id="id_codAnimal" value="<?=$codAnimal?>" > 
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_retorno">É retorno </label>
    <select name="field_retorno" id="id_retorno" required >
          <option value="Não" value="<?=$retorno?>">Não</option>
          <option value="Sim" value="<?=$retorno?>">Sim</option>
    </select>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_dtInseminacao">Inseminação </label>
    <input type="date" name="field_dtInseminacao" id="id_dtInseminacao" value="<?=$dtInseminacao?>" > 
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_touroInseminador">Cód. touro </label>
    <input type="text"  name="field_touroInseminador" maxlength="100" id="id_touroInseminador" value="<?=$touroInseminador?>"required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_inseminadorResponsavel">Inseminador responsável </label>
    <input type="text" name="field_inseminadorResponsavel" maxlength="100" id="id_inseminadorResponsavel" value="<?=$inseminadorResponsavel?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_obs">Observação: </label>
    <input type="text" name="field_obs" maxlength="100" id="id_obs" value="<?=$obs?>">
  </div>
  <button name="adiciona" class="button-form" type="submit">Salvar</button>
  
</form>

<?php require_once("../includes/footer.php");?>