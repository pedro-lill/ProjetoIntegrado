<?php require_once("/includes/header.php");?>
<?php require_once("/classes/conexao.php");?>
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

    <h1>FICHA DO ANIMAL</h1>

    <form action="adicionar-ficha.php">
      <div>
        <h1>Dados da ficha</h1>
        <input type="number" placeholder="Código do animal" name="field_codAnimal" value="<?=$codAnimal ?>" required>
        <input type="date" name="field_dtNascimento" size="100" maxlength="100" id="id_dtNascimento" value="<?=$dtNascimento?>" required>
        <input type="number" placeholder="Código mae" name="field_codMae" size="100" maxlength="100" id="id_codMae" value="<?=$codMae?>" required>
        <input type="text" placeholder="Nome do touro-pai" name="field_nomePai" size="50" maxlength="50" id="id_nomePai" autofocus value="<?=$nomePai?>" required>
        <input type="number" placeholder="Estado de vida" name="field_estadoVida" size="50" maxlength="50" id="id_estadoVida" autofocus value="<?=$estadoVida?>" required>
        <input type="file" required>
        <div class="container-historicos">
          <div id="button-historico-inseminacao" class="historico"><label>Adicionar histórico de inseminação</label></div>
          <div id="button-historico-producao" class="historico"><label>Adicionar histórico de produção de leite</label></div>
          <div id="button-historico-medicacao" class="historico"><label>Adicionar histórico de medicação</label></div>
        </div>
        <button class="button-form" type="submit">Salvar</button>
          
      </div>
    </form>

    <div id="modal_insem" class="modal">
        <div class="modal-content">
            <span id="close_insem" class="close">&times;</span>
            <form action="adicionar-ficha.php">
                <div>
                    <h1>Adicionar histórico de inseminação</h1>
                    <input type="number" placeholder="Código da vaca-mãe" required>
                    <input type="date" required> 
                    <input type="text" placeholder="Nome do touro inseminador" required>
                    <input type="text" placeholder="Inseminador responsável" required>
                    <input type="text" placeholder="Retorno">
                    <input type="date"> <!--data de retorno da nova inseminacao-->
                    <input type="text" placeholder="Observação">
                    <!--previsao de parto-->
                    <!--previsao de secagem-->
                    <button class="button-form" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>

  <div id="modal_prod" class="modal">
    <div class="modal-content">
      <span id="close_prod" class="close">&times;</span>
      <form action="adicionar-ficha.php">
        <div>
          <h1>Adicionar histórico de produção de leite</h1>
          <input type="number" placeholder="Código do animal" required>
          <input type="date" required>
          <input type="number" step="0.01" placeholder="Produção em Litros" required>
          <select name="periodoDia" required>
            <option value="manha">Manhã</option>
            <option value="tarde">Tarde</option>
          </select>
          <button class="button-form" type="submit">Salvar</button>
        </div>
      </form>
    </div>
  </div>

  <div id="modal_medi" class="modal">
    <div class="modal-content">
      <span id="close_medi" class="close">&times;</span>
      <form action="adicionar-ficha.php">
        <div>
          <h1>Adicionar histórico de tratamento</h1>
          <input type="number" placeholder="Código do animal" required>
          <input type="date" required>
          <input type="text" placeholder="Motivos do tratamento">
          <input type="text" placeholder="Nome do medicamento">
          <input type="text" placeholder="Quantidade de medicamento">
          <input type="text" placeholder="Responsável" required>
          <input type="text" placeholder="Observação">
          <button class="button-form" type="submit">Salvar</button>
        </div>
      </form>
    </div>
  </div>

  <script src="/js/fichas.js"></script>
