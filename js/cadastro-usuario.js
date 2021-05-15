function validarCadastroLogin(){

  var usuario = document.getElementById("id_nomeLogin").value;
  var senha = document.getElementById("id_senha").value;
  var senhaConfirma = document.getElementById("id_senhaConfirma").value;

  if(usuario != "" && senha != "" && senha.length > 6 && senha == senhaConfirma){
    if(usuario == ""){
      alert("Inserir nome de usuario");
      return false
    }
    if(senha == ""){
      alert("Inserir senha");
      return false
    }
    if(senhaConfirma == ""){
      alert("Inserir senha de confirmação");
      return false
    }
  }else{return true}

}