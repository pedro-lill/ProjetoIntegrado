<?php require_once("includes/header.php");?>

    <h1>FICHA DO ANIMAL</h1>
    <div id="modal_insem" class="modal">
        <div class="modal-content">
            <span id="close_insem" class="close">&times;</span>
            <form action="teste.php">
                <div>
                    <h1>Dados da ficha</h1>
                    <input type="number" placeholder="Código do animal" required>
                    <input type="date"  name="field_dtNascimento" size="100" maxlength="100" id="id_dtNascimento" value="<?=$dtNascimento?>" required>
                    <input type="number" placeholder="Código mae"  name="field_codMae" size="100" maxlength="100" id="id_codMae" value="<?=$codMae?>" required>
                    <input type="text" placeholder="Nome do touro-pai" name="field_nomePai" size="50" maxlength="50" id="id_nomePai" autofocus value="<?=$nomePai?>" required>
                    <input type="number" placeholder="Estado de vida" name="field_estadoVida" size="50" maxlength="50" id="id_estadoVida" autofocus value="<?=$estadoVida?>" required>
                    <input type="file" name="field_imagem" id="id_imagem" required>
                    <!--previsao de parto-->
                    <!--previsao de secagem-->
                    <button class="button-form" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>