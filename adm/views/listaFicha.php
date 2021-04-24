<?php require_once("../includes/header.php");?>
    <main>
        <h1><?=$titulo ?></h1>
        <button class="button-form" onclick="window.location.href='views/cadastraFicha.php'">Adicionar ficha</button>

        <div class="lista_fichas">
            <?php require_once("../includes/ficha.php");?>
        </div>
        
    </main>