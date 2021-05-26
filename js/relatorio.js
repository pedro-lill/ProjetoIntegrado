function fazerRelatorio(){
    var filtromes = document.getElementById("id_mes").value
    var filtroano = document.getElementById("id_ano").value
    var filtrotipo = document.getElementById("id_tipo").value
    
    if(filtrotipo == "prod"){
        return window.location.href='../controller/relatorioController.php?acao=prod&filtroMes=' + filtromes +'&filtroAno='+filtroano;
    }if(filtrotipo == "ins"){
        return window.location.href='../controller/relatorioController.php?acao=ins&filtroMes='+ filtromes +'&filtroAno='+filtroano;
    }if(filtrotipo == "prevSec"){
        return window.location.href='../controller/relatorioController.php?acao=prevSec&filtroMes=' + filtromes +'&filtroAno='+filtroano;
    }if(filtrotipo == "prevPa"){
        return window.location.href='../controller/relatorioController.php?acao=prevPa&filtroMes=' + filtromes +'&filtroAno='+filtroano;
    }if(filtrotipo == "nasc"){
        return window.location.href='../controller/relatorioController.php?acao=nasc&filtroMes=' + filtromes +'&filtroAno='+filtroano;
    }
}