<?php require_once("../includes/header.php");?>

<div class="graficos-container">
    
    <div class="grafico-prox-partos">
    <h3>Possíveis partos nos meses de 2021</h3>

        <canvas id="myChart"></canvas>
    </div>

    <div class="grafico-prod-leite">
    <h3>Produção de leite / 2020</h3>

        <canvas id="myChartProdLeite"></canvas>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="../js/graficos.js"></script>    

<?php require_once("../includes/footer.php");?>