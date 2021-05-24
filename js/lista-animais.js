function verificarExcluir(id) {
    if(confirm('Você realmente deseja excluir o animal de cód. ' + id + "?")){
        return window.location.href='../controller/animalController.php?acao=exclui&codAnimal=' + id
    }else
        return;
};