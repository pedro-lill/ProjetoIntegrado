<?php require_once("../includes/header.php");?>

<div class="erro_cadastro">
  <?php
  if(isset($erros) && count($erros) !=0){
      echo "<ul>";
      foreach($erros as $e)
          echo "<li>$e</li>";
      echo "</ul>";
  }

  //inseminacao
  //$codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
  $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : "";
  //$dtTratamento = isset($_POST['field_dtTratamento']) ? $_POST['field_dtTratamento'] : "";
  $motivoTratamento = isset($_POST['field_motivoTratamento']) ? $_POST['field_motivoTratamento'] : "";
  $nomeMedicamento = isset($_POST['field_nomeMedicamento']) ? $_POST['field_nomeMedicamento'] : "";
  $quantidadeMedicamento = isset($_POST['field_quantidadeMedicamento']) ? $_POST['field_quantidadeMedicamento'] : "";
  $responsavel = isset($_POST['field_responsavel']) ? $_POST['field_responsavel'] : "";
  $obs = isset($_POST['field_obs']) ? $_POST['field_obs'] : "";
    ?>
</div>
 
      <form action="adicionar-ficha.php">
        <div>
        <h1>Cadastro de tratamento</h1>
          <input type="number" placeholder="Código do animal" required>
          <input type="datetime-local" required>
          <input type="text" placeholder="Motivos do tratamento">
          <input type="text" placeholder="Nome do medicamento">
          <input type="text" placeholder="Quantidade de medicamento">
          <input type="text" placeholder="Responsável" required>
          <input type="text" placeholder="Observação">
          <button class="button-form" type="submit">Salvar</button>
        </div>
      </form>
      <?php require_once("../includes/footer.php");?>