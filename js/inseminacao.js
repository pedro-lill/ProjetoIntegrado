
document.getElementById("id_dtPrevisaoParto_label").style.display = "none";
document.getElementById("div-prev-parto").style.display = "none";

function dataPrevisaoParto(){

    
    var dtInseminacao = document.getElementById("id_dtInseminacao").value;
    
    var dataFormatada = moment(dtInseminacao, "YYYY-MM-DD").add(10, 'months');
    var dataFormatada = moment(dataFormatada).format('YYYY-MM-DD');

    document.getElementById("div-data-insem").classList.add('div-metade');
    document.getElementById("div-data-insem").classList.remove('div-inteira');

    document.getElementById("div-touro").classList.add('div-inteira');
    document.getElementById("div-touro").classList.remove('div-metade');

    document.getElementById("id_dtPrevisaoParto_label").style.display = "block";
    document.getElementById("div-prev-parto").style.display = "block";

    document.getElementById("id_dtPrevisaoParto").setAttribute("type", "date");
    document.getElementById("id_dtPrevisaoParto").setAttribute("value", dataFormatada);

}