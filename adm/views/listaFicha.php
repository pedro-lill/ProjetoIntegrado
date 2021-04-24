<?php require_once("../includes/header.php");?>
    <main>
        <h1><?=$titulo ?></h1>
        <button class="button-form" onclick="window.location.href='fichaController.php?acao=adiciona'">Adicionar ficha</button>

        <div class="lista_fichas">
            <?php require_once("../includes/ficha.php");?>
        </div>
        
    </main>