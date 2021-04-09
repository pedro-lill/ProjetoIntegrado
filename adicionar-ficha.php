<?php require_once("includes/header.php");?>

    <h1 class="container-ficha-h1">FICHA DO ANIMAL</h1>

    <form action="adicionar-ficha.php">
        <div class="container-ficha">
          
           <h1>Dados da ficha</h1>
            <input type="number" placeholder="Número do animal" required>
            <input type="date" required>
            <input type="text" placeholder="Nome do touro-pai" required>
            <input type="text" placeholder="Nome da vaca-mãe" required>
            <input type="text" placeholder="Está morta" required>
            <input type="file" required>
          
           <div class="container-historicos">
                <div id="button-historico-inseminacao" class="historico"><label>Adicionar histórico de inseminação</label></div>
                <div id="button-historico-producao" class="historico"><label>Adicionar histórico de produção de leite</label></div>
                <div id="button-historico-medicacao" class="historico"><label>Adicionar histórico de medicação</label></div>
            </div>
       
          <button class="button-form" type="submit">Salvar</button>
           
        </div>
    </form>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="adicionar-ficha.php">
                <div class="container-ficha">
                    <h1>Adicionar histórico de inseminação</h1>
                    <input type="number" placeholder="Número do animal" required>
                    <input type="date" required>
                    <input type="text" placeholder="Nome do touro-pai" required>
                    <input type="text" placeholder="Nome da vaca-mãe" required>
                    <button class="button-form" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="adicionar-ficha.php">
        <div class="container-ficha">
          <h1>Adicionar histórico de produção de leite</h1>
          <input type="date" required>
          <input type="number" placeholder="Número do animal" required>
          <input type="number" placeholder="Produção em Litros" required>
          <button class="button-form" type="submit">Salvar</button>
        </div>
    </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="adicionar-ficha.php">
        <div class="container-ficha">
          <h1>Adicionar histórico de tratamento</h1>
          <input type="number" placeholder="Número do animal" required>
          <input type="date" required>
          <input type="text" placeholder="Motivos do tratamento" required>
          <input type="text" placeholder="Remédios usados" required>
          <button class="button-form" type="submit">Salvar</button>
        </div>
    </div>

    <script src="/js/script.js"></script>
