<?php
include_once "../classes/SaborDAO.php";
if(!isset($_GET['acao'])){
    // pg inicial de adm. de sabores; carrega lista de registros
    $titulo = "Lista de Sabores";
    $obj = new SaborDAO();
    $lista = $obj->listar();
    include "views/layout/topo.php";
    include "views/listaSabor.php";
    include "views/layout/rodape.php";
}
else {    
	switch($_GET['acao']){

        case 'cadastra':
            $titulo = "Cadastro de Sabor";
            // logica para cadastro
            if(!isset($_POST['cadastrar'])){ // dados ainda nao submetidos
                include "views/layout/topo.php";
                include "views/cadastraSabor.php";
                include "views/layout/rodape.php";                
            }
            else{ // dados submetidos; trata a inserção
                $novo = new Sabor();
                $novo->setNome($_POST['field_nome']);
                $novo->setIngredientes($_POST['field_ingredientes']);
                $novo->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $novo->validate();
                if(count($erros) != 0){ // algum campo em branco
                    include "views/layout/topo.php";
                    include "views/cadastraSabor.php";
                    include "views/layout/rodape.php";                       
                }
                else{ // campos todos preenchidos
                    //upload
                    $destino = "../assets/images/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        //inserção
                        $bd = new SaborDAO();
                        if($bd->inserir($novo))
                            header("Location: saborController.php"); // redireciona
                    }
                    else{
                        // erro no upload
                        $erros[] = "Erro no upload";
                        include "views/layout/topo.php";
                        include "views/cadastraSabor.php";
                        include "views/layout/rodape.php";                         
                    }
                }
            }
            break;

        
        case 'altera':
            $titulo = "Alteração de Sabor";
            if(!isset($_POST['alterar'])){ // dados ainda nao submetidos; carrega os dados atuais
                $obj = new SaborDAO();
                $sabor = $obj->buscar($_GET['cod']);
                include "views/layout/topo.php";
                include "views/alteraSabor.php";
                include "views/layout/rodape.php"; 
            }
            else{ // dados submetidos; efetua a alteração
                $obj = new Sabor();
                $obj->setNome($_POST['field_nome']);
                $obj->setIngredientes($_POST['field_ingredientes']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $obj->setCodigo($_POST['field_codigo']);
                $erros = $obj->validate();
                if(count($erros) != 0){ // algum campo em branco
                    include "views/layout/topo.php";
                    include "views/alteraSabor.php";
                    include "views/layout/rodape.php";                       
                }
                else{ // campos todos preenchidos
                    //upload
                    $destino = "../assets/images/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        //inserção
                        $bd = new SaborDAO();
                        if($bd->alterar($obj))
                            header("Location: saborController.php"); // redireciona
                    }
                    else{
                        // erro no upload
                        $erros[] = "Erro no upload";
                        include "views/layout/topo.php";
                        include "views/cadastraSabor.php";
                        include "views/layout/rodape.php";                         
                    }
                }
            }
            break;

        
        case 'exclui':
            $bd = new SaborDAO();
            if($bd->excluir($_GET['cod']))
                header("Location: saborController.php"); // redireciona

            break;
        
        default:
            echo "Ação não permitida";  
                      
    }// fim switch
} // fim else

?>

