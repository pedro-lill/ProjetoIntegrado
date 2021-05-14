function fazerRelatorio(){
    var filtromes = document.getElementById("id_mes").value
    var filtrotipo = document.getElementById("id_tipo").value
    
    if(filtrotipo == "prod"){
        return window.location.href='../controller/relatorioController.php?acao=prod&filtroMes=' + filtromes;
    }if(filtrotipo == "ins"){
        return window.location.href='../controller/relatorioController.php?acao=ins&filtroMes=' + filtromes;
    }if(filtrotipo == "prevSec"){
        return window.location.href='../controller/relatorioController.php?acao=prevSec&filtroMes=' + filtromes;
    }if(filtrotipo == "prevPa"){
        return window.location.href='../controller/relatorioController.php?acao=prevPa&filtroMes=' + filtromes;
    }
}