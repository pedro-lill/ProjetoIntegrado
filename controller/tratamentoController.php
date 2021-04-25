<?php
include_once "../controller/classes/TratamentoDAO.phpDAO.php";
if(!isset($_GET['acao'])){
    $obj = new tratamentoDAO();
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
                $novo = new Tratamento();
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
                $tratamento = $obj->buscar($_GET['codAnimal']);
                include "views/alteraFicha.php";
            }
            else{ 
                $obj = new Ficha();
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
            $bd = new TratamentoDAO();
            if($bd->excluir($_GET['codAnimal']))
                header("Location: tratamentoController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

