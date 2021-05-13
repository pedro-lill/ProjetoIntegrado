function fazerRelatorio(x){
    console.log(x)
    var filtro = document.getElementById("id_mes").value
    return window.location.href='../controller/relatorioController.php?acao=filtro&field_mes=' + filtro
}