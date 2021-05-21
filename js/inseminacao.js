
document.getElementById("id_dtPrevisaoParto_label").style.display = "none";

function dataPrevisaoParto(){

    var dtInseminacao = document.getElementById("id_dtInseminacao").value;
    
    var dataFormatada = moment(dtInseminacao, "YYYY-MM-DD").add(10, 'months');

    console.log(dtInseminacao);
    console.log(dataFormatada)

    document.getElementById("div-data-insem").classList.add('div-metade');
    document.getElementById("div-data-insem").classList.remove('div-inteira');

    document.getElementById("id_dtPrevisaoParto_label").style.display = "block";
    document.getElementById("id_dtPrevisaoParto").setAttribute("type", "date");
    document.getElementById("id_dtPrevisaoParto").setAttribute("value", "2222-12-12");

}