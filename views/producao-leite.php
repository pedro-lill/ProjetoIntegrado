<?php require_once("../includes/header.php");?>
<h1>Produção de leite</h1>
<form action="adicionar-ficha.php">
  <div class="container-ficha">
    <input type="number" placeholder="Código do animal" required>
    <input type="date" required>
    <input type="number" placeholder="Produção em Litros" required>
    <button class="button-form" type="submit">Salvar</button>
  </div>
</form>
<?php require_once("../includes/footer.php");?>
