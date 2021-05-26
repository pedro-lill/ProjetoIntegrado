<?php
include_once "../controller/classes/AnimalDAO.php";
if(!isset($_GET['acao'])){
    $obj = new AnimalDAO();
    $lista = $obj->listar();
    include "views/listaAnimal.php";
}
else {    
	switch($_GET['acao']){
        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraAnimal.php";              
            }
            else{
                $obj = new Animal();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraAnimal.php";                       
                }
                else{ 
                    $destino = "../img/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        $bd = new AnimalDAO();
                        if($bd->inserir($obj))
                            header("Location: animalController.php"); 
                    }
                    else{
                        $erros[] = "Erro no upload";
                        include "views/cadastraAnimal.php";                      
                    }
                
                }
            }
        break;
        
        case 'altera':
            if(!isset($_POST['altera'])){ 
                $obj = new AnimalDAO();
                $animal = $obj->buscar($_GET['codAnimal']);
                include "views/alteraAnimal.php";
            }
            else{ 
                $obj = new Animal();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $obj->setMotivoMorte($_POST['field_motivoMorte']);
                $obj->setDataMorte($_POST['field_dataMorte']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraAnimal.php";                      
                }
                else{ 
                    $destino = "../img/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        $bd = new AnimalDAO();
                        if($bd->alterar($obj))
                            header("Location: animalController.php"); 
                    }
                    else{
                        $erros[] = "Erro no upload";
                        include "views/cadastraAnimal.php";                        
                    }
                }
            }
            break;

        case 'exclui':
            $bd = new AnimalDAO();
            if($bd->excluir($_GET['codAnimal']))
                header("Location: animalController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

