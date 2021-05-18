document.getElementById("id_motivoMorte_label").style.display = "none";
document.getElementById("id_dataMorte_label").style.display = "none";

function estadoVida(){
    var estadoVida = document.getElementById("id_estadoVida").value;

    if(estadoVida == "Morta"){
        document.getElementById("id_motivoMorte_label").style.display = "block";
        document.getElementById("id_motivoMorte").setAttribute("type", "text");
        document.getElementById("id_dataMorte_label").style.display = "block";
        document.getElementById("id_dataMorte").setAttribute("type", "date");
    }
    if(estadoVida == "Viva"){
        document.getElementById("id_motivoMorte_label").style.display = "none";
        document.getElementById("id_motivoMorte").setAttribute("type", "hidden");
        document.getElementById("id_dataMorte_label").style.display = "none";
        document.getElementById("id_dataMorte").setAttribute("type", "hidden");
    }
}

function botaoVoltar(x){
    if(x = "alteraAnimal")
        return window.location.href='../controller/animalController.php';
    else if(x = "alteraInseminacao")
        return window.location.href='../controller/animalController.php';

}

function adicionaHistoricoInse(x){
    return window.location.href='../controller/inseminacaoController.php?acao=adiciona&codAnimal=' + x;
}

function adicionaHistoricoProd(x){
    return window.location.href='../controller/producaoController.php?acao=adiciona&codAnimal=' + x;
}

function adicionaHistoricoTrat(x){
    return window.location.href='../controller/tratamentoController.php?acao=adiciona&codAnimal=' + x;
}