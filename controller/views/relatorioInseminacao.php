<?php
        require_once "../controller/classes/inseminacaoDAO.php";
        $obj = new inseminacaoDAO();
        $lista = $obj->buscaLista($codAnimal); 
        if(count($lista) == 0){
            echo "Nenhuma animal encontrada.";
        }else{
            foreach ($lista as $inseminacao);
        }
        ?>   