<?php require_once("../includes/header.php");?>
<div class="erro_cadastro">
  <?php
    if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
        echo "<li>$e</li>";
    }
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
    $dtNascimento = isset($_POST['field_dtNascimento']) ? $_POST['field_dtNascimento'] : date("Y-m-d");
    $codMae = isset($_POST['field_codMae']) ? $_POST['field_codMae'] : "";
    $nomePai = isset($_POST['field_nomePai']) ? $_POST['field_nomePai'] : "";
    $estadoVida = isset($_POST['field_estadoVida']) ? $_POST['field_estadoVida'] : "";
    $nomeImagem = isset($_FILES['field_imagem'])?($_FILES['field_imagem']) : "";
    $motivoMorte = isset($_POST['field_motivoMorte'])?($_POST['field_motivoMorte']) : "";
    $dataMorte = isset($_POST['field_dataMorte'])?($_POST['field_dataMorte']) : "";
  ?>
</div>

<form action="" class="container-historicos" name="form-inseminacao" method="post" enctype="multipart/form-data">

  <h2>CADASTRO DE ANIMAL</h2>
  
  <div class="div-metade">
    <label class="label-cadastra" for="id_codAnimal">Código do animal </label>
    <input type="number" name="field_codAnimal" id="id_codAnimal" value="<?=$codAnimal?>" required>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_dtNascimento">Nascimento </label>
    <input type="date" name="field_dtNascimento" maxlength="100" id="id_dtNascimento" value="<?=$dtNascimento?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_codMae">Código da vaca-mãe </label>
    <input type="number" name="field_codMae" maxlength="100" id="id_codMae" value="<?=$codMae?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_nomePai">Nome do touro-pai </label>
    <input type="text" name="field_nomePai" maxlength="50" id="id_nomePai" value="<?=$nomePai?>" required>
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_estadoVida">Estado de vida </label>
    <select name="field_estadoVida" id="id_estadoVida" onChange="estadoVida()" required >
        <option value="Viva" value="<?=$estadoVida?>">Viva</option>
        <option value="Morta" value="<?=$estadoVida?>">Morta</option>
  </select>
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_dataMorte" id="id_dataMorte_label">Data da morte</label>
    <input type="hidden" name="field_dataMorte" maxlength="50" id="id_dataMorte" value="<?=$dataMorte?>">
  </div>
  <div class="div-metade">
    <label class="label-cadastra" for="id_motivoMorte" id="id_motivoMorte_label">Motivo da morte</label>
    <input type="hidden" name="field_motivoMorte" maxlength="50" id="id_motivoMorte" value="<?=$motivoMorte?>">
  </div>
  <div class="div-inteira">
    <label class="label-cadastra" for="id_nomeImagem">Imagem do animal </label>
    <input type="file" name="field_imagem" id="id_imagem" maxlength="50" id="id_nomeImagem" value="<?=$nomeImagem?>" required>
  </div>
  <button name="adiciona" class="button-form" type="submit">Salvar</button>
</form>

<script src="../js/cadastraAnimal.js"></script>

<?php require_once("../includes/footer.php");?>