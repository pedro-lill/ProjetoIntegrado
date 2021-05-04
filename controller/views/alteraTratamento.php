<main>

    <div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
        echo "<ul>";
        foreach($erros as $e)
          echo "<li>$e</li>";
        echo "</ul>";
    }

    $codTratamento = isset($_POST['field_codTratamento']) ? $_POST['field_codTratamento'] : $tratamento->getCodTratamento();
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $tratamento->getCodAnimal();
    $dtTratamento = isset($_POST['field_dtTratamento']) ? $_POST['field_dtTratamento'] : $tratamento->getDtTratamento();
    $motivoTratamento = isset($_POST['field_motivoTratamento']) ? $_POST['field_motivoTratamento'] : $tratamento->getMotivoTratamento();
    $nomeMedicamento = isset($_POST['field_nomeMedicamento']) ? $_POST['field_nomeMedicamento'] : $tratamento->getNomeMedicamento();
    $quantidadeMedicamento = isset($_POST['field_quantidadeMedicamento']) ? $_POST['field_quantidadeMedicamento'] : $tratamento->getMotivoTratamento();
    $responsavel = isset($_POST['field_responsavel']) ? $_POST['field_responsavel'] : $tratamento->getResponsavel();
    $obs = isset($_POST['field_obs']) ? $_POST['field_obs'] : $tratamento->getObs();
    ?>
    </div>
    
    <?php require_once("../includes/header.php");?>

    <form action="" method="post" enctype="multipart/form-data">
      <div class="container-ficha">
        <h1>Dados da ficha </h1>
        <input type="number" placeholder="Código do animal" name="field_codAnimal" value="<?=$codAnimal ?>">
        <input type="datetime-local" name="field_dtTratamento" maxlength="100" value="<?=$dtTratamento?>">
        <input type="number" placeholder="Motivo Tratamento" name="field_motivoTratamento" maxlength="100" value="<?=$motivoTratamento?>">
        <input type="text" placeholder="nome Medicamento" name="field_nomeMedicamento" maxlength="50" autofocus value="<?=$nomeMedicamento?>">
        <input type="number" placeholder="quantidadeMedicamento" name="field_quantidadeMedicamento" maxlength="50" id="id_quantidadeMedicamento" autofocus value="<?=$quantidadeMedicamento?>">
        <input type="text" placeholder="" name="field_responsavel" maxlength="50" autofocus value="<?=$responsavel?>">
        <input type="text" placeholder="obs" name="field_obs" maxlength="50" autofocus value="<?=$obs?>">
        <button name="altera" class="button-form" type="submit">Alterar</button>
      </div>
    </form>
