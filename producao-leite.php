<?php require_once("includes/header.php");?>
  
    <h1>Produção de leite</h1>

          <form action="adicionar-ficha.php">
              <div class="container-ficha">
                  <input type="number" placeholder="Número do animal" required>
                  <input type="date" required>
                  <input type="text" placeholder="Nome do touro-pai" required>
                  <input type="text" placeholder="Nome da vaca-mãe" required>
                  <button class="button-form" type="submit">Salvar</button>
              </div>
          </form>

    <script src="/js/script.js"></script>
