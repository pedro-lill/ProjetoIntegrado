
document.getElementById("id_dtPrevisaoParto_label").style.display = "none";
document.getElementById("id_dtPrevisaoSecagem_label").style.display = "none";

function dataPrevisaoParto(){

    
    var dtInseminacao = document.getElementById("id_dtInseminacao").value;
    
    var dataFormatada = moment(dtInseminacao, "YYYY-MM-DD").add(10, 'months');
    var dataPrevParto = moment(dataFormatada).format('YYYY-MM-DD');
    var dataPrevSecagem = moment(dataFormatada).format('YYYY-MM-DD');

    document.getElementById("id_dtPrevisaoParto_label").style.display = "block";
    document.getElementById("id_dtPrevisaoSecagem_label").style.display = "block";

    document.getElementById("id_dtPrevisaoParto").setAttribute("type", "date");
    document.getElementById("id_dtPrevisaoParto").setAttribute("value", dataPrevParto);

    document.getElementById("id_dtPrevisaoSecagem").setAttribute("type", "date");
    document.getElementById("id_dtPrevisaoSecagem").setAttribute("value", dataPrevSecagem);
}