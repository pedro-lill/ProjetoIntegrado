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


    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 099, 132, 0.3)',
                    'rgba(054, 162, 235, 0.3)',
                    'rgba(255, 206, 086, 0.3)',
                    'rgba(075, 192, 192, 0.3)',
                    'rgba(153, 102, 255, 0.3)',
                    'rgba(255, 159, 064, 0.3)',
                    'rgba(183, 102, 255, 0.3)',
                    'rgba(253, 102, 255, 0.3)',
                    'rgba(143, 102, 255, 0.3)',
                    'rgba(255, 099, 132, 0.3)',
                    'rgba(226, 121, 065, 0.3)',
                    'rgba(092, 218, 066, 0.3)',
                ],
                borderColor: [
                    'rgba(255, 099, 132)',
                    'rgba(054, 162, 235)',
                    'rgba(255, 206, 086)',
                    'rgba(075, 192, 192)',
                    'rgba(153, 102, 255)',
                    'rgba(255, 159, 064)',
                    'rgba(183, 102, 255)',
                    'rgba(253, 102, 255)',
                    'rgba(143, 102, 255)',
                    'rgba(255, 099, 132)',
                    'rgba(226, 121, 065)',
                    'rgba(092, 218, 066)',
                ],
                borderWidth: 1.5
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    </script>

        <script>
            var cty = document.getElementById('myChartProdLeite').getContext('2d');
            var myChart = new Chart(cty, {
                type: 'line',
                data: {
                    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    datasets: [{
                    label: 'Produção de leite / 2020',
                    data: [
                        
                    ],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                    }]
                },
            });
    </script>



<?php require_once("../includes/footer.php");?>