var checkbox = document.getElementById("check");
var minhasopcoesdemenu = document.getElementById("PrecisoParajs");

if (checkbox.checked == false) {
    minhasopcoesdemenu.style.left = "-100%";
}

function MeuBotaoMenu() {
    var checkbox = document.getElementById("check");
    var minhasopcoesdemenu = document.getElementById("PrecisoParajs");

    if (checkbox.checked == true) {
        minhasopcoesdemenu.style.left = "0vw";
    } else {
        minhasopcoesdemenu.style.left = "-50vw";
    }

}