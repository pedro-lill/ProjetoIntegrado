document.getElementById("id_novaDtInseminacao_label").style.display = "none";

function retorno(){
    var retorno = document.getElementById("id_retorno").value;
    console.log(retorno)
    if(retorno == "Sim"){
        document.getElementById("id_novaDtInseminacao_label").style.display = "block";
        document.getElementById("id_novaDtInseminacao").setAttribute("type", "date");
    }
    if(retorno == "Não"){
        document.getElementById("id_novaDtInseminacao_label").style.display = "none";
        document.getElementById("id_novaDtInseminacao").setAttribute("type", "hidden");
    }
}