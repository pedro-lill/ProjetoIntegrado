<main>

<div class="erro_cadastro">
  <?php
    if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
        echo "<li>$e</li>";
    }
    $codInseminacao = isset($_POST['field_codInseminacao']) ? $_POST['field_codInseminacao'] : $inseminacao->getCodInseminacao();
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $inseminacao->getCodAnimal();
    $dtInseminacao = isset($_POST['field_dtInseminacao']) ? $_POST['field_dtInseminacao'] : $inseminacao->getDtInseminacao();
    $touroInseminador = isset($_POST['field_touroInseminador']) ? $_POST['field_touroInseminador'] : $inseminacao->getTouroInseminador();
    $inseminadorResponsavel = isset($_POST['field_inseminadorResponsavel']) ? $_POST['field_inseminadorResponsavel'] : $inseminacao->getInseminadorResponsavel();
    $retorno = isset($_POST['field_retorno']) ? $_POST['field_retorno'] : $inseminacao->getRetorno();
    $obs = isset($_POST['field_obs']) ? $_POST['field_obs'] : $inseminacao->getObs();
  ?>
</div>

<?php require_once("../includes/header.php");?>

<form action="" class="container-historicos" method="post" enctype="multipart/form-data">

  <h2>EDITAR INSEMINAÇÃO</h2>

  <input type="hidden" name="field_codInseminacao" value="<?=$codInseminacao?>">
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
  <div class="div-metade" >
    <label class="label-cadastra" for="id_dtInseminacao">Inseminação </label>
    <input type="date" name="field_dtInseminacao" id="id_dtInseminacao" value="<?=$dtInseminacao?>" onclick="dataPrevisaoParto()" > 
  </div>
  <div class="div-metade" >
    <label class="label-cadastra" for="id_touroInseminador">Cód. touro </label>
    <input type="text"  name="field_touroInseminador" maxlength="100" id="id_touroInseminador" value="<?=$touroInseminador?>"required>
  </div>
  <div class="div-metade" >
    <label class="label-cadastra" for="id_dtPrevSecagem" id="id_dtPrevSecagem_label">Previsão de secagem</label>
    <input type="hidden" name="field_dtPrevSecagem" id="id_dtPrevSecagem" disabled="disabled" value="" > 
  </div>
  <div class="div-metade" >
    <label class="label-cadastra" for="id_dtPrevParto" id="id_dtPrevParto_label">Previsão de parto</label>
    <input type="hidden" name="field_dtPrevParto" id="id_dtPrevParto" disabled="disabled" value="" > 
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_inseminadorResponsavel">Inseminador responsável </label>
    <input type="text" name="field_inseminadorResponsavel" maxlength="100" id="id_inseminadorResponsavel" value="<?=$inseminadorResponsavel?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_obs">Observação: </label>
    <input type="text" name="field_obs" maxlength="100" id="id_obs" value="<?=$obs?>">
  </div>
  <button name="altera" class="button-form" type="submit">Alterar</button>
</form>

<script>

  document.getElementById("id_dtPrevParto_label").style.display = "none";
  document.getElementById("id_dtPrevSecagem_label").style.display = "none";

function dataPrevisaoParto(){
  const dtInseminacao = document.getElementById("id_dtInseminacao").value;

  <?php
  $inseminacaophp = "2020-11-11";
  $dataFormatadaPrevParto = date('Y-m-d', strtotime("+284 days",strtotime($inseminacaophp)));
  $dataFormatadaPrevSecagem =  date('Y-m-d', strtotime("+224 days",strtotime($inseminacaophp)));
  ?>

    var dataFormatadaPrevParto =  "<?php echo $dataFormatadaPrevParto;?>";
    var dataFormatadaPrevSecagem = "<?php echo $dataFormatadaPrevSecagem;?>";

    document.getElementById("id_dtPrevParto_label").style.display = "block";
    document.getElementById("id_dtPrevSecagem_label").style.display = "block";

    document.getElementById("id_dtPrevParto").setAttribute("type", "date");
    document.getElementById("id_dtPrevParto").setAttribute("value", dataFormatadaPrevParto);

    document.getElementById("id_dtPrevSecagem").setAttribute("type", "date");
    document.getElementById("id_dtPrevSecagem").setAttribute("value", dataFormatadaPrevSecagem);
}

</script>
<?php require_once("../includes/footer.php");?>