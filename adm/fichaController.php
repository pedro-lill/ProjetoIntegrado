<?php
include_once "../classes/FichaDAO.php";
if(!isset($_GET['acao'])){
    $titulo = "Lista de Fichas";
    $obj = new FichaDAO();
    $lista = $obj->listar();
    include "views/listaFicha.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            $titulo = "Adiciona Ficha";
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraFicha.php";              
            }
            else{
                $novo = new Ficha();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $novo->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraFicha.php";                       
                }
                else{ 
                    $destino = "../img/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        $bd = new FichaDAO();
                        if($bd->inserir($novo))
                            header("Location: fichaController.php"); 
                    }
                    else{
                        $erros[] = "Erro no upload";
                        include "views/cadastraFicha.php";                      
                    }
                }
            }
            break;
        
        case 'altera':
            $titulo = "Alteração de Ficha";
            if(!isset($_POST['altera'])){ 
                $obj = new FichaDAO();
                $ficha = $obj->buscar($_GET['codAnimal']);
                include "views/alteraFicha.php";
            }
            else{ 
                $obj = new Ficha();
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraFicha.php";                      
                }
                else{ 
                    $destino = "../img/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        $bd = new FichaDAO();
                        if($bd->alterar($obj))
                            header("Location: fichaController.php"); 
                    }
                    else{
                        $erros[] = "Erro no upload";
                        include "views/cadastraFicha.php";                        
                    }
                }
            }
            break;

        case 'exclui':
            $bd = new FichaDAO();
            if($bd->excluir($_GET['codAnimal']))
                header("Location: fichaController.php"); 

            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

