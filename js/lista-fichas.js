function verificarExcluir(id) {
    if(confirm('Você realmente deseja excluir a ficha de cód. ' + id + "?")){
        window.location.href='fichaController.php?acao=exclui&codAnimal='+id+'';
    }
};