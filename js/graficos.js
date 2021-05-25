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

var cty = document.getElementById('myChartProdLeite').getContext('2d');
var myChart = new Chart(cty, {
    type: 'line',
    data: {
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        datasets: [{
          label: 'Produção de leite / 2020',
          data: [58, 65, 59, 80, 81, 73, 80, 70, 65, 70, 75, 68],
          fill: false,
          borderColor: 'rgb(75, 192, 192)',
          tension: 0.1
        }]
    },
});