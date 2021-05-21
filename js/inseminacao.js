
document.getElementById("id_dtPrevParto_label").style.display = "none";
document.getElementById("id_dtPrevSecagem_label").style.display = "none";

function dataPrevisaoParto(){

    
    var dtInseminacao = document.getElementById("id_dtInseminacao").value;
    
    var dataFormatadaPrevParto = moment(dtInseminacao, "YYYY-MM-DD").add(284, 'days');
    var dataFormatadaPrevSecagem = moment(dtInseminacao, "YYYY-MM-DD").add(224, 'days');

    var dataPrevParto = moment(dataFormatadaPrevParto).format('YYYY-MM-DD');
    var dataPrevSecagem = moment(dataFormatadaPrevSecagem).format('YYYY-MM-DD');

    document.getElementById("id_dtPrevParto_label").style.display = "block";
    document.getElementById("id_dtPrevSecagem_label").style.display = "block";

    document.getElementById("id_dtPrevParto").setAttribute("type", "date");
    document.getElementById("id_dtPrevParto").setAttribute("value", dataPrevParto);

    document.getElementById("id_dtPrevSecagem").setAttribute("type", "date");
    document.getElementById("id_dtPrevSecagem").setAttribute("value", dataPrevSecagem);
}