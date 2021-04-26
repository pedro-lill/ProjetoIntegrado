function validarLogin(){

    var usuario = document.getElementsByName('field_nomeLogin')[0].value;
    var senha = document.getElementsByName('field_senha')[0].value;

    usuario = usuario.toLowerCase();
    console.log(usuario, senha)

    if(usuario == "pedro" && senha == "123"){
        return true;
    }else{
      alert("usuario = pedro - senha = 123")
      return false
    }

}