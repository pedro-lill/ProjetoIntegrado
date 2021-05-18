function validarLogin(){

    var usuario = document.getElementsByName('field_nomeLogin')[0].value;
    var senha = document.getElementsByName('field_senha')[0].value;

    if(usuario == "" && senha== ""){
      if(usuario == ""){
        alert("Inserir nome de usuario");
        return false
      }
      else if(senha == ""){
        alert("Inserir senha");
        return false
      }
    }else{
      return window.location.href='../controller/usuarioController.php?acao=login&login=' + usuario +'&senha=' + senha;
    }

}