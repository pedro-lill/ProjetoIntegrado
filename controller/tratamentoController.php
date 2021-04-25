<?php
include_once "../controller/classes/TratamentoDAO.phpDAO.php";
if(!isset($_GET['acao'])){
    $obj = new tratamentoDAO();
    $lista = $obj->listar();
    include "views/cadastraTratamento.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraTratamento.php";              
            }
            else{
                $novo = new Tratamento();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $erros = $novo->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraTratamento.php";                       
                }
            }
            break;
        
        case 'altera':
            if(!isset($_POST['altera'])){ 
                $obj = new TratamentoDAO();
                $tratamento = $obj->buscar($_GET['codAnimal']);
                include "views/alteraTratamento.php";
            }
            else{ 
                $obj = new Tratamento();
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraTratamento.php";                      
                }
            }
            break;

        case 'exclui':
            $bd = new TratamentoDAO();
            if($bd->excluir($_GET['codAnimal']))
                header("Location: tratamentoController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

