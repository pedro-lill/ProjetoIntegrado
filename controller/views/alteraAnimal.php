<main>

<div class="erro_cadastro">
  <?php
    if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
        echo "<li>$e</li>";
    }
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $animal->getCodAnimal();
    $dtNascimento = isset($_POST['field_dtNascimento']) ? $_POST['field_dtNascimento'] : $animal->getDtNascimento();
    $codMae = isset($_POST['field_codMae']) ? $_POST['field_codMae'] : $animal->getCodMae();
    $nomePai = isset($_POST['field_nomePai']) ? $_POST['field_nomePai'] : $animal->getNomePai();
    $estadoVida = isset($_POST['field_estadoVida']) ? $_POST['field_estadoVida'] : $animal->getEstadoVida();
    $nomeImagem = isset($_FILES['field_imagem']['name'])?($_FILES['field_imagem']['name']) : $animal->getNomeImagem();
    $motivoMorte = isset($_FILES['field_motivoMorte'])?($_FILES['field_motivoMorte']) : "";
    $dataMorte = isset($_FILES['field_dataMorte'])?($_FILES['field_dataMorte']) : "";
  ?>
</div>
    
<?php require_once("../includes/header.php");?>

<form action="" class="container-historicos" name="form-inseminacao" method="post" enctype="multipart/form-data">

  <h2>EDITAR ANIMAL</h2>
  
  <div class="div-metade">
    <label class="label-cadastra" for="id_codAnimal">Código do animal </label>
    <input type="number" name="field_codAnimal" id="id_codAnimal" value="<?=$codAnimal ?>" required>
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
  <button name="adiciona" class="button-form-voltar" type="button" onclick="botaoVoltar('alteraAnimal')">Voltar</button>
  <button name="altera" class="button-form-altera" type="submit">Alterar</button>
</form>

<div class="botoes-adiciona">
  <button name="adiciona" class="button-adiciona-historico-altera" onclick="adicionaHistoricoInse(<?=$codAnimal ?>)">+ histórico de inseminação</button>
  <button name="adiciona" class="button-adiciona-historico-altera" onclick="adicionaHistoricoProd(<?=$codAnimal ?>)">+ histórico de produção</button>
  <button name="adiciona" class="button-adiciona-historico-altera" onclick="adicionaHistoricoTrat(<?=$codAnimal ?>)">+ histórico de tratamento</button>
</div>

<script src="../js/cadastraAnimal.js"></script>

<br>
<br>

<?php include("listaInseminacao.php");?>
<?php include("listaProducao.php");?>
<?php include("listaTratamento.php");?>
<?php require_once("../includes/footer.php");?>

</main>