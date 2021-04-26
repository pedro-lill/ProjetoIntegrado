<?php require_once("../includes/header.php");?>

    <h1>FICHA DO ANIMAL</h1>
    <div id="modal_insem" class="modal">
        <div class="modal-content">
            <span id="close_insem" class="close">&times;</span>
            <form action="teste.php">
                <div>
                    <h1>Dados da ficha</h1>
                    <input type="number" placeholder="Código do animal" required>
                    <input type="datetime-local"  name="field_dtNascimento" maxlength="100" id="id_dtNascimento" value="<?=$dtNascimento?>" required>
                    <input type="number" placeholder="Código mae"  name="field_codMae" maxlength="100" id="id_codMae" value="<?=$codMae?>" required>
                    <input type="text" placeholder="Nome do touro-pai" name="field_nomePai"  maxlength="50" id="id_nomePai" autofocus value="<?=$nomePai?>" required>
                    <input type="number" placeholder="Estado de vida" name="field_estadoVida" maxlength="50" id="id_estadoVida" autofocus value="<?=$estadoVida?>" required>
                    <input type="file" name="field_imagem" id="id_imagem" required>
                    <!--previsao de parto-->
                    <!--previsao de secagem-->
                    <button class="button-form" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>