<main>

    <div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
        echo "<li>$e</li>";
      echo "</ul>";
    }

    $codProducao = isset($_POST['field_codProducao']) ? $_POST['field_codProducao'] : $producao->getCodProducao();
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $producao->getCodAnimal();
    $dtColeta = isset($_POST['field_dtColeta']) ? $_POST['field_dtColeta'] : $producao->getDtColeta();
    $periodoDia = isset($_POST['field_periodoDia']) ? $_POST['field_periodoDia'] : $producao->getPeriodoDia();
    $litros = isset($_POST['field_litros']) ? $_POST['field_litros'] : $producao->getLitros();
    ?>
    </div>
    
    <?php require_once("../includes/header.php");?>

    <form action="" method="post" enctype="multipart/form-data">
      <div class="container-ficha">
        <h1>Dados da producao </h1>
          <div>
            <label class="label-cadastra" for="id_codAnimal">Código do animal: </label>
            <input type="number" name="field_codAnimal" id="id_codAnimal" autofocus value="<?=$codAnimal ?>" required>
          </div>
          <div>
            <label class="label-cadastra" for="id_dtColeta">Data da coleta: </label>
            <input type="datetime-local" name="field_dtColeta" maxlength="100" id="id_dtColeta" value="<?=$dtColeta?>" required>
          </div>
          <div>
            <label class="label-cadastra" for="id_litros">Produção em litros: </label>
            <input type="number" step="0.01" name="field_litros" id="id_litros" autofocus value="<?=$litros?>" required>
          </div>
          <div>
            <label class="label-cadastra" for="id_periodoDia">Periodo do dia: </label>
            <select id="id_periodoDia" required >
              <option  name="field_periodoDia" value="manha" autofocus value="<?=$periodoDia?>">Manhã</option>
              <option  name="field_periodoDia" value="tarde" autofocus value="<?=$periodoDia?>">Tarde</option>
            </select>
          </div>
        <button name="altera" class="button-form" type="submit">Alterar</button>
      </div>
    </form>
