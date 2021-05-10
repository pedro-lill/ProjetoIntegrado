<?php
    require_once "../controller/classes/TratamentoDAO.php";
    $obj = new TratamentoDAO();
    $lista = $obj->buscaLista($codAnimal); 
    if(count($lista) == 0){
        echo "Nenhuma animal encontrada.";
    }else{
        foreach ($lista as $tratamento);
    }
?>