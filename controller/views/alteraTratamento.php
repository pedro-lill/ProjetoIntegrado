<main>

    <div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
        echo "<ul>";
        foreach($erros as $e)
          echo "<li>$e</li>";
        echo "</ul>";
    }

    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $ficha->getCodAnimal();
    $dtNascimento = isset($_POST['field_dtNascimento']) ? $_POST['field_dtNascimento'] : $ficha->getDtNascimento();
    $codMae = isset($_POST['field_codMae']) ? $_POST['field_codMae'] : $ficha->getCodMae();
    $nomePai = isset($_POST['field_nomePai']) ? $_POST['field_nomePai'] : $ficha->getNomePai();
    $estadoVida = isset($_POST['field_estadoVida']) ? $_POST['field_estadoVida'] : $ficha->getEstadoVida();
    ?>
    </div>
    
    <?php require_once("../includes/header.php");?>

    <form action="" method="post" enctype="multipart/form-data">
      <div class="container-ficha">
        <h1>Dados da ficha </h1>
        <input type="number" placeholder="Código do animal" name="field_codAnimal" value="<?=$codAnimal ?>">
        <input type="datetime-local" name="field_dtNascimento" maxlength="100" value="<?=$dtNascimento?>">
        <input type="number" placeholder="Código mae" name="field_codMae" maxlength="100" value="<?=$codMae?>">
        <input type="text" placeholder="Nome do touro-pai" name="field_nomePai" maxlength="50" autofocus value="<?=$nomePai?>">
        <input type="number" placeholder="Estado de vida" name="field_estadoVida" maxlength="50" id="id_estadoVida" autofocus value="<?=$estadoVida?>">
        <input type="file" required>
        <button name="altera" class="button-form" type="submit">Alterar</button>
      </div>
    </form>
