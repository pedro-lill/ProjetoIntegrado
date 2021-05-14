function fazerRelatorioIns(x){
    console.log(x)
    var filtromes = document.getElementById("id_mes").value
    return window.location.href='../controller/relatorioController.php?acao=filtromes&field_mes=' + filtromes
}

function fazerRelatorioProd(x){
    console.log(x)
    var filtroprod = document.getElementById("id_mes").value
    return window.location.href='../controller/relatorioController.php?acao=filtroprod&field_mes=' + filtroprod
}