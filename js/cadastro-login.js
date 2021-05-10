function validarCadastroLogin(){

    var usuario = document.getElementsByName('field_nomeLogin')[0].value;
    var senha = document.getElementsByName('field_senha')[0].value;
    var senhaConfirma = document.getElementsByName('field_senhaConfirma')[0].value;

    usuario = usuario.toLowerCase();

    if(usuario != "" && senha!= "" && senha.length > 6){

      if(senha == senhaConfirma)
          return true;
      else{
            alert("Senhas não são iguais");
        return false
      }

    }else{

      if(usuario == "")
        alert("Inserir nome de usuario");
      if(senha == "")
        alert("Inserir senha");
      if(senhaConfirma == "")
        alert("Inserir senha de confirmação");

    }

}