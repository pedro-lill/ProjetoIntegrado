<?php
include_once "../controller/classes/UsuarioDAO.php";
if(!isset($_GET['acao'])){
    $obj = new UsuarioDAO();
    $lista = $obj->listar();
    include "views/cadastraUsuario.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraUsuario.php";              
            }
            else{
                $novo = new Usuario();
                $obj->setCodUsuario($_POST['field_codUsuario']);
                $obj->setNomeLogin($_POST['field_nomeLogin']);
                $obj->setSenha($_POST['field_senha']);
                $erros = $novo->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraUsuario.php";                       
                }
            }
            break;
        
        case 'altera':
            if(!isset($_POST['altera'])){ 
                $obj = new UsuarioDAO();
                $usuario = $obj->buscar($_GET['codUsuario']);
                include "views/alteraUsuario.php";
            }
            else{ 
                $obj->setCodUsuario($_POST['field_codUsuario']);
                $obj->setNomeLogin($_POST['field_nomeLogin']);
                $obj->setSenha($_POST['field_senha']);
                $erros = $obj->validate();
                if(count($erros) != 0){
                    include "views/alteraUsuario.php";                      
                }
            }
            break;

        case 'exclui':
            $bd = new UsuarioDAO();
            if($bd->excluir($_GET['codUsuario']))
                header("Location: usuarioController.php"); 
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

