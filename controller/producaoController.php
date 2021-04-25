<?php
include_once "../controller/classes/ProducaoDAO.php";
if(!isset($_GET['acao'])){
    $obj = new ProducaoDAO();
    $lista = $obj->listar();
    include "views/cadastraFicha.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraFicha.php";              
            }
            else{
                $novo = new Producao();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $erros = $novo->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraFicha.php";                       
                }
            }
            break;
        
        case 'altera':
            if(!isset($_POST['altera'])){ 
                $obj = new FichaDAO();
                $ficha = $obj->buscar($_GET['codProducao']);
                include "views/alteraFicha.php";
            }
            else{ 
                $obj = new Producao();
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraFicha.php";                      
                }
            }
            break;

        case 'exclui':
            $bd = new ProducaoDAO();
            if($bd->excluir($_GET['codProducao']))
                header("Location: producaoController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

