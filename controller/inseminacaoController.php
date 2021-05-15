<?php
include_once "../controller/classes/inseminacaoDAO.php";
if(!isset($_GET['acao'])){
    $obj = new inseminacaoDAO();
    $lista = $obj->listar();
    include "views/listaAnimal.php";
}
else {    
	switch($_GET['acao']){
        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraInseminacao.php";              
            }
            else{
                $obj = new Inseminacao();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtInseminacao($_POST['field_dtInseminacao']);
                $obj->setTouroInseminador($_POST['field_touroInseminador']);
                $obj->setInseminadorResponsavel($_POST['field_inseminadorResponsavel']);
                $obj->setRetorno( $_POST['field_retorno']);
                $obj->setObs( $_POST['field_obs']);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraInseminacao.php";                       
                }
                else{
                    $bd = new inseminacaoDAO();
                    if($bd->inserir($obj))
                        header("Location: inseminacaoController.php"); 
                }
            }
            break;
                
        case 'altera':
            if(!isset($_POST['altera'])){ 
                $obj = new InseminacaoDAO();
                $inseminacao = $obj->buscarAltera($_GET['codInseminacao']);
                include "views/alteraInseminacao.php";
            }
            else{ 
                $obj = new Inseminacao();
                $obj->setCodInseminacao($_POST['field_codInseminacao']);
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtInseminacao($_POST['field_dtInseminacao']);
                $obj->setTouroInseminador($_POST['field_touroInseminador']);
                $obj->setInseminadorResponsavel($_POST['field_inseminadorResponsavel']);
                $obj->setRetorno( $_POST['field_retorno']);
                $obj->setObs( $_POST['field_obs']);
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraInseminacao.php";                      
                }
            }
            break;

        case 'exclui':
            $bd = new InseminacaoDAO();
            if($bd->excluir($_GET['codInseminacao']))
                header("Location: inseminacaoController.php"); 

            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

