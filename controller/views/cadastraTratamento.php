<?php require_once("../includes/header.php");?>
<div class="erro_cadastro">
  <?php
    if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
        echo "<li>$e</li>";
    }
    $codAnimalPadrao = $_GET['codAnimal'] ? $_GET['codAnimal'] : "";
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
    $dtTratamento = isset($_POST['field_dtTratamento']) ? $_POST['field_dtTratamento'] : "";
    $motivoTratamento = isset($_POST['field_motivoTratamento']) ? $_POST['field_motivoTratamento'] : "";
    $nomeMedicamento = isset($_POST['field_nomeMedicamento']) ? $_POST['field_nomeMedicamento'] : "";
    $dtTratamento = isset($_POST['field_dtTratamento']) ? $_POST['field_dtTratamento'] : "";
    $quantidadeMedicamento = isset($_POST['field_quantidadeMedicamento']) ? $_POST['field_quantidadeMedicamento'] : "";
    $responsavel = isset($_POST['field_responsavel']) ? $_POST['field_responsavel'] : "";
    $obs = isset($_POST['field_obs']) ? $_POST['field_obs'] : "";
  ?>
</div>

<form action="" class="container-historicos" method="post" enctype="multipart/form-data">

  <h2>CADASTRO DE TRATAMENTO</h2>
  
  <div class="div-metade">
    <label class="label-cadastra" for="id_codAnimal">Código do animal </label>
    <input type="number" name="field_codAnimal" id="id_codAnimal" autofocus value="<?=$codAnimalPadrao ?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_dtTratamento">Data do tratamento </label>
    <input type="date" name="field_dtTratamento" id="id_dtTratamento" maxlength="100" value="<?=$dtTratamento?>">
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_motivoTratamento">Motivo do tratamento </label>
    <input type="text" name="field_motivoTratamento" maxlength="100" id="id_motivoTratamento" value="<?=$motivoTratamento?>">
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_nomeMedicamento">Nome do medicamento </label>
    <input type="text" name="field_nomeMedicamento" id="id_nomeMedicamento" maxlength="50" autofocus value="<?=$nomeMedicamento?>">
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_quantidadeMedicamento">Quantidade de medicamento </label>
    <input type="number" name="field_quantidadeMedicamento" maxlength="50" id="id_quantidadeMedicamento" autofocus value="<?=$quantidadeMedicamento?>">
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_responsavel">Responsável </label>
    <input type="text" name="field_responsavel" maxlength="50" id="id_responsavel" autofocus value="<?=$responsavel?>">
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_obs">Observação </label>
    <input type="text" name="field_obs" maxlength="50" id="id_obs" autofocus value="<?=$obs?>">
  </div>
  <button name="adiciona" class="button-form" type="submit">Salvar</button>

</form>

<?php require_once("../includes/footer.php");?>