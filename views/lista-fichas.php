<?php require_once("includes/header.php");?>

    <h1>Lista de fichas</h1>

    <button class="button-form" onclick="window.location.href='adicionar-ficha.php'">Adicionar ficha</button>

    <div class="lista_fichas">
      <?php require_once("includes/ficha.php");?>
    </div>
