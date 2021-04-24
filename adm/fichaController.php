<?php
include_once "../classes/FichaDAO.php";
if(!isset($_GET['acao'])){
    // pg inicial de adm. de sabores; carrega lista de registros
    $titulo = "Lista de Fichas";
    $obj = new FichaDAO();
    $lista = $obj->listar();
    include "../views/lista-fichas.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            $titulo = "Adiciona Ficha";
            // logica para cadastro
            if(!isset($_POST['adiciona'])){ // dados ainda nao submetidos
                include "../views/adicionar-ficha.php";              
            }
            else{ // dados submetidos; trata a inserção
                $novo = new Ficha();
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $novo->validate();
                if(count($erros) != 0){ // algum campo em branco
                    include "../views/adicionar-ficha.php";                       
                }
                else{ // campos todos preenchidos
                    //upload
                    $destino = "img/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        //inserção
                        $bd = new FichaDAO();
                        if($bd->inserir($novo))
                            header("Location: fichaController.php"); // redireciona
                    }
                    else{
                        // erro no upload
                        $erros[] = "Erro no upload";
                        include "../views/adicionar-ficha.php";                      
                    }
                }
            }
            break;

        
        case 'altera':
            $titulo = "Alteração de Ficha";
            if(!isset($_POST['alterar'])){ // dados ainda nao submetidos; carrega os dados atuais
                $obj = new FichaDAO();
                $sabor = $obj->buscar($_GET['codAnimal']);

                include "views/alteraFicha.php";
            }
            else{ // dados submetidos; efetua a alteração
                $obj = new Ficha();
                $obj->setDtNascimento($_POST['field_dtNascimento']);
                $obj->setCodMae($_POST['field_codMae']);
                $obj->setNomePai($_POST['field_nomePai']);
                $obj->setEstadoVida($_POST['field_estadoVida']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $obj->setCodAnimal($_POST['field_codAnimal']);
                $erros = $obj->validate();
                if(count($erros) != 0){ // algum campo em branco
                    include "views/alteraFicha.php";                      
                }
                else{ // campos todos preenchidos
                    //upload
                    $destino = "../img/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        //inserção
                        $bd = new FichaDAO();
                        if($bd->alterar($obj))
                            header("Location: fichaController.php"); // redireciona
                    }
                    else{
                        // erro no upload
                        $erros[] = "Erro no upload";
                        include "views/cadastraFicha.php";                        
                    }
                }
            }
            break;

        
        case 'exclui':
            $bd = new FichaDAO();
            if($bd->excluir($_GET['codAnimal']))
                header("Location: fichaController.php"); // redireciona

            break;
        
        default:
            echo "Ação não permitida";  
                      
    }// fim switch
} // fim else

?>

