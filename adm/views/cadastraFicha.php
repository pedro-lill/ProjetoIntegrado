<main>
    <h2><?= $titulo ?></h2>
    <hr>
    <br>
    <div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
        echo "<ul>";
        foreach($erros as $e)
            echo "<li>$e</li>";
        echo "</ul>";
    }
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
    $dtNascimento = isset($_POST['field_dtNascimento']) ? $_POST['field_dtNascimento'] : "";
    $codMae = isset($_POST['field_codMae']) ? $_POST['field_codMae'] : "";
    $nomePai = isset($_POST['field_nomePai']) ? $_POST['field_nomePai'] : "";
    $estadoVida = isset($_POST['field_estadoVida']) ? $_POST['field_estadoVida'] : "";
    ?>
    </div>
    <?php require_once("../includes/header.php");?>
    <br><br>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="field_codAnimal" value="<?=$codAnimal ?>">
        <div>
            <label for="id_nome">Data de Nascimento: </label>
            <input type="date" name="field_dtNascimento" size="100" maxlength="100" id="id_dtNascimento" value="<?=$dtNascimento?>">
        </div>
        <div>
            <label for="id_nome">Código da mãe: </label>
            <input type="number" name="field_codMae" size="100" maxlength="100" id="id_codMae" value="<?=$codMae?>">
        </div>
        <div>
            <label for="id_nome">Nome do pai: </label>
            <input type="text" name="field_nomePai" size="50" maxlength="50" id="id_nomePai" autofocus value="<?=$nomePai?>">
        </div>
        <div>
            <label for="id_nome">Estado de vida : </label>
            <input type="number" name="field_estadoVida" size="50" maxlength="50" id="id_estadoVida" autofocus value="<?=$estadoVida?>">
        </div>
        <div>
            <label for="id_nome">Imagem: </label>
            <input type="file" name="field_imagem" id="id_imagem" required>
        </div>
        <br>
        <div>
            <input type="submit" value="Confirmar" name="cadastrar">
            <input type="reset" value="Limpar campos">
        </div>
    </form>
    </form>
    <br><br><br><br>
</main>