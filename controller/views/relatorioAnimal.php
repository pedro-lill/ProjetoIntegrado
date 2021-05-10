<?php
    require_once "../controller/classes/AnimalDAO.php";
    $obj = new AnimalDAO();
    $lista = $obj->listar(); 
    if(count($lista) == 0){
        echo "Nenhuma animal encontrada.";
    }else{
        foreach ($lista as $animal);
    }
?>     