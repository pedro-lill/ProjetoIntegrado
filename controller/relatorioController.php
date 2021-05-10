<?php
include_once "../controller/classes/inseminacaoDAO.php";
if(!isset($_GET['acao'])){
    $obj = new InseminacaoDAO();
    $lista = $obj->listar();
    include "../views/relatorios.php";
}
else {    
	switch($_GET['acao']){

        case 'inseminacao':
            if(!isset($_POST['inseminacao'])){ 
                include "../controller/views/relatorioInseminacao.php";              
            }
            else{
                
                // $obj = new Producao();
                // $obj->setCodAnimal($_POST['field_codAnimal']);
                // $obj->setDtColeta($_POST['field_dtColeta']);
                // $obj->setLitros($_POST['field_litros']);
                // $obj->setPeriodoDia($_POST['field_periodoDia']);
                // $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraProducao.php";                       
                }
                else{
                    $bd = new ProducaoDAO();
                    if($bd->inserir($obj))
                        header("Location: producaoController.php"); 
                }
            }
            break;
        
            case 'producao':
                if(!isset($_POST['producao'])){ 
                    include "../controller/views/relatorioProducao.php";              
                }
                else{
                    
                    // $obj = new Producao();
                    // $obj->setCodAnimal($_POST['field_codAnimal']);
                    // $obj->setDtColeta($_POST['field_dtColeta']);
                    // $obj->setLitros($_POST['field_litros']);
                    // $obj->setPeriodoDia($_POST['field_periodoDia']);
                    // $erros = $obj->validate();
                    if(count($erros) != 0){ 
                        include "views/cadastraProducao.php";                       
                    }
                    else{
                        $bd = new ProducaoDAO();
                        if($bd->inserir($obj))
                            header("Location: producaoController.php"); 
                    }
                }
                break;
        
            case 'tratamento':
                if(!isset($_POST['tratamento'])){ 
                    include "../controller/views/relatorioTratamento.php";              
                }
                else{
                    
                    // $obj = new Producao();
                    // $obj->setCodAnimal($_POST['field_codAnimal']);
                    // $obj->setDtColeta($_POST['field_dtColeta']);
                    // $obj->setLitros($_POST['field_litros']);
                    // $obj->setPeriodoDia($_POST['field_periodoDia']);
                    // $erros = $obj->validate();
                    if(count($erros) != 0){ 
                        include "views/cadastraProducao.php";                       
                    }
                    else{
                        $bd = new ProducaoDAO();
                        if($bd->inserir($obj))
                            header("Location: producaoController.php"); 
                    }
                }
                break;
        
        
        case 'filtro':
            if(!isset($_POST['filtro'])){ 
                $inseminacao = $obj->buscaMes($_GET['mes']);
                echo $_GET['mes'];
            }
            else{ 
                
               
                if(count($erros) != 0){
                    ;                      
                }
            }
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

