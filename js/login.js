function validar(){

    var usuario = document.getElementsByName('username')[0].value;
    var senha = document.getElementsByName('password')[0].value;
    debugger
    usuario = usuario.toLowerCase();
    console.log(usuario, senha)

    if(usuario == "pedro" && senha == "123"){
        return true;
    }else{
      alert("usuario = pedro - senha = 123")
      return false
    }

}