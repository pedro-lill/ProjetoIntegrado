<h1>Histórico de produção de leite</h1>  
        <?php
        require_once "../controller/classes/ProducaoDAO.php";
        $obj = new ProducaoDAO();
        $lista = $obj->buscaLista($codAnimal); 
        if(count($lista) == 0){
            echo "Nenhuma animal encontrada.";
        }else{
            foreach ($lista as $producao);
        }
        ?>  