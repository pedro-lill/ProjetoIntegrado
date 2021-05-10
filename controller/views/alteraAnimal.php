<main>

    <div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
        echo "<ul>";
        foreach($erros as $e)
          echo "<li>$e</li>";
        echo "</ul>";
    }
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $animal->getCodAnimal();
    $dtNascimento = isset($_POST['field_dtNascimento']) ? $_POST['field_dtNascimento'] : $animal->getDtNascimento();
    $codMae = isset($_POST['field_codMae']) ? $_POST['field_codMae'] : $animal->getCodMae();
    $nomePai = isset($_POST['field_nomePai']) ? $_POST['field_nomePai'] : $animal->getNomePai();
    $estadoVida = isset($_POST['field_estadoVida']) ? $_POST['field_estadoVida'] : $animal->getEstadoVida();
    $nomeImagem = isset($_FILES['field_imagem']['name'])?($_FILES['field_imagem']['name']) : $animal->getNomeImagem();
    ?>
    </div>
    
    <?php require_once("../includes/header.php");?>

    <form action="" method="post" enctype="multipart/form-data">
      <div class="container-animal">
        <h1>Dados da animal </h1>
        <div>
          <label class="label-cadastra" for="id_codAnimal">Código do animal: </label>
          <input type="number" name="field_codAnimal" id="id_codAnimal" autofocus value="<?=$codAnimal ?>" required>
        </div>
        <div>
          <label class="label-cadastra" for="id_dtNascimento">Data de nascimento: </label>
          <input type="date" name="field_dtNascimento" maxlength="100" id="id_dtNascimento" value="<?=$dtNascimento?>" required>
        </div>
        <div>
          <label class="label-cadastra" for="id_codMae">Código da vaca-mãe: </label>
          <input type="number" name="field_codMae" maxlength="100" id="id_codMae" value="<?=$codMae?>" required>
        </div>
        <div>
          <label class="label-cadastra" for="id_nomePai">Nome do touro-pai: </label>
          <input type="text" name="field_nomePai" maxlength="50" id="id_nomePai" value="<?=$nomePai?>" required>
        </div>
        <div>
          <label class="label-cadastra" for="id_estadoVida">Estado de vida </label>
          <select name="field_estadoVida" id="id_estadoVida" onChange="estadoVida()" required >
              <option value="Viva" value="<?=$estadoVida?>">Viva</option>
              <option value="Morta" value="<?=$estadoVida?>">Morta</option>
        </select>
        </div>
        <div>
          <label class="label-cadastra" for="id_nomeImagem">Imagem do animal: </label>
          <input type="file" name="field_imagem" id="id_imagem" maxlength="50" id="id_nomeImagem" autofocus value="<?=$nomeImagem?>" required>
        </div>
        <button name="altera" class="button-form" type="submit">Alterar</button>
      </div>
    </form>
    
    <?php include("listaInseminacao.php");?>
    <?php include("listaProducao.php");?>
    <?php include("listaTratamento.php");?>

  <?php require_once("../includes/footer.php");?>

</main>