
var span_insem = document.querySelector("#close_insem");
var span_medi = document.querySelector("#close_medi");
var span_prod = document.querySelector("#close_prod");

var hist_insem = document.querySelector("#button-historico-inseminacao");
var modal_insem = document.getElementById("modal_insem");

var hist_prod = document.querySelector("#button-historico-producao");
var modal_prod = document.getElementById("modal_prod");

var hist_medi = document.querySelector("#button-historico-medicacao");
var modal_medi = document.getElementById("modal_medi");


hist_insem.onclick = function() {
    modal_insem.style.display = "block";
}

hist_prod.onclick = function() {
    modal_prod.style.display = "block";
}

hist_medi.onclick = function() {
    modal_medi.style.display = "block";
}

span_insem.onclick = function() {
    modal_insem.style.display = "none";
}
span_prod.onclick = function() {
    modal_prod.style.display = "none";
}
span_medi.onclick = function() {
    modal_medi.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}