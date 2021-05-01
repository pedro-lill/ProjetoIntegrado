<?php
include_once "../controller/classes/TratamentoDAO.php";
if(!isset($_GET['acao'])){
    $obj = new TratamentoDAO();
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
                $obj = new Tratamento();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setMotivoTratamento($_POST['field_motivoTratamento']);
                $obj->setNomeMedicamento($_POST['field_nomeMedicamento']);
                $obj->setQuantidadeMedicamento($_POST['field_quantidadeMedicamento']);
                $obj->setResponsavel($_POST['field_responsavel']);
                $obj->setObs($_POST['field_obs']);
                $erros = $obj->validate();
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
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setMotivoTratamento($_POST['field_motivoTratamento']);
                $obj->setNomeMedicamento($_POST['field_nomeMedicamento']);
                $obj->setQuantidadeMedicamento($_POST['field_quantidadeMedicamento']);
                $obj->setResponsavel($_POST['field_responsavel']);
                $obj->setObs($_POST['field_obs']);
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

