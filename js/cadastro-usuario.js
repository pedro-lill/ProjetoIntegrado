function validarCadastroLogin(){

  var usuario = document.getElementsByName('field_nomeLogin')[0].value;
  var senha = document.getElementsByName('field_senha')[0].value;
  var senhaConfirma = document.getElementsByName('field_senhaConfirma')[0].value;

  console.log(usuario)
  console.log(senha)
  console.log(senhaConfirma)

  if(usuario == "" || senha.length < 6 || senha != senhaConfirma){

    if(usuario == ""){
      alert("Inserir nome de usuario");
      return false
    } else if(senha.length < 6){
      alert("Inserir senha válida");
      return false
    } else if(senhaConfirma == ""){
      alert("Inserir senha de confirmação");
      return false
    } else if(senha != senhaConfirma){
      alert("Senhas não conferem");
      return false
    }

  }else{return true}

}