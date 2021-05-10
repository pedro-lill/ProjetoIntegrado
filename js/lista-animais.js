function verificarExcluir(id) {
    if(confirm('Você realmente deseja excluir a animal de cód. ' + id + "?")){
        window.location.href='animalController.php?acao=exclui&codAnimal='+id+'';
    }
};