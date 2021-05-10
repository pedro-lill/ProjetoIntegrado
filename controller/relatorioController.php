<?php
include_once "../controller/classes/inseminacaoDAO.php";
if(!isset($_GET['acao'])){
    $obj = new InseminacaoDAO();
    $lista = $obj->listar();
    include "views/alteraInseminacao.php";
}
else {    
	switch($_GET['acao']){
                
        case 'filtro':
            if(!isset($_POST['filtro'])){ 
                $inseminacao = $obj->buscarAltera($_GET['codInseminacao']);
                include "views/alteraInseminacao.php";
            }
            else{ 
                
               
                if(count($erros) != 0){
                    include "views/alteraInseminacao.php";                      
                }
            }
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

