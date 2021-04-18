<?php require_once("includes/header.php");?>

    <h1 class="container-ficha-h1">FICHA DO ANIMAL</h1>

    <form action="adicionar-ficha.php">
        <div class="container-ficha">
          
           <h1>Dados da ficha</h1>
            <input type="number" placeholder="Código do animal" required>
            <input type="date" required>
            <input type="text" placeholder="Nome do touro-pai" required>
            <input type="text" placeholder="Número vaca-mãe" required>
            <input type="text" placeholder="Estado de vida" required>
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
                <div class="container-ficha">
                    <h1>Adicionar histórico de inseminação</h1>
                    <input type="number" placeholder="Código da vaca-mãe" required>
                    <input type="date" required>
                    <input type="text" placeholder="Nome do touro inseminador" required>
                    <input type="text" placeholder="Inseminador responsavel" required>
                    <input type="checkbox" placeholder="Retorno" required>
                    <input type="date"> <!--data de retorno da nova inseminacao-->
                    <input type="text" placeholder="Observaçãp">
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
        <div class="container-ficha">
          <h1>Adicionar histórico de produção de leite</h1>
          <input type="number" placeholder="Código do animal" required>
          <input type="date" required>
          <input type="number" placeholder="Produção em Litros" required>
          <button class="button-form" type="submit">Salvar</button>
        </div>
      </form>
    </div>
  </div>

  <div id="modal_medi" class="modal">
    <div class="modal-content">
      <span id="close_medi" class="close">&times;</span>
      <form action="adicionar-ficha.php">
        <div class="container-ficha">
          <h1>Adicionar histórico de tratamento</h1>
          <input type="number" placeholder="Código do animal" required>
          <input type="date" required>
          <input type="text" placeholder="Motivos do tratamento">
          <input type="text" placeholder="Nome do medicamento" required>
          <input type="text" placeholder="Tempo tratamento">
          <input type="text" placeholder="Quantidade de medicamento">
          <input type="text" placeholder="Responsável" required>
          <input type="text" placeholder="Restrição" required>
          <input type="text" placeholder="Observação" required>
          <button class="button-form" type="submit">Salvar</button>
        </div>
      </form>
    </div>
  </div>

  <script src="/js/fichas.js"></script>
