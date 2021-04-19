function validarLogin(){

    var usuario = document.getElementsByName('username')[0].value;
    var senha = document.getElementsByName('password')[0].value;
    var senhaConfirm = document.getElementsByName('password-confirm')[0].value;

    usuario = usuario.toLowerCase();
    console.log(usuario, senha)

    if(usuario != "" && senha != "" && senhaConfirm != ""){
        return true;
    }else{
      alert("Usuario ou senha inválidos")
      return false
    }

}