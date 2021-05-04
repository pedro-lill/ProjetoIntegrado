<main>

    <div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
        echo "<ul>";
        foreach($erros as $e)
          echo "<li>$e</li>";
        echo "</ul>";
    }

    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $producao->getCodAnimal();
    $dtColeta = isset($_POST['field_dtColeta']) ? $_POST['field_dtColeta'] : $producao->getDtColeta();
    $periodoDia = isset($_POST['field_periodoDia']) ? $_POST['field_periodoDia'] : $producao->getPeriodoDia();
    $litros = isset($_POST['field_litros']) ? $_POST['field_litros'] : $producao->getLitros();
    $codProducao = isset($_POST['field_codProducao']) ? $_POST['field_codProducao'] : $producao->getCodProducao();
    ?>
    </div>
    
    <?php require_once("../includes/header.php");?>

    <form action="" method="post" enctype="multipart/form-data">
      <div class="container-ficha">
        <h1>Dados da producao </h1>
        <input type="number" placeholder="Código do animal" name="field_codAnimal" autofocus value="<?=$codAnimal ?>" required>
          <input type="datetime-local" name="field_dtColeta" maxlength="100" id="id_dtColeta" value="<?=$dtColeta?>" required>
          <input type="number" step="0.01" placeholder="Produção em Litros" name="field_litros" autofocus value="<?=$litros?>" required>
          <select required>
            <option  name="field_periodoDia" value="manha" autofocus value="<?=$periodoDia?>">Manhã</option>
            <option  name="field_periodoDia" value="tarde" autofocus value="<?=$periodoDia?>">Tarde</option>
          </select>
        <button name="altera" class="button-form" type="submit">Alterar</button>
      </div>
    </form>
