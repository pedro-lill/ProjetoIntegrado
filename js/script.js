const toggle = document.getElementById('toggle');

toggle.addEventListener('click', () =>
    document.body.classList.toggle('show-nav')
);

var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];

var hist_insem = document.getElementById("button-historico-inseminacao");
var hist_prod = document.getElementById("button-historico-producao");
var hist_medi = document.getElementById("button-historico-medicacao");

hist_insem.onclick = function() {
    modal.style.display = "block";
}

hist_prod.onclick = function() {
    modal.style.display = "block";
}

hist_medi.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}