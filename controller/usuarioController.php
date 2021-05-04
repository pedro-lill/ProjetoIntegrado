<?php
include_once "../controller/classes/UsuarioDAO.php";
if(!isset($_GET['acao'])){
    $obj = new UsuarioDAO();
    include "views/cadastraUsuario.php";
}
else {    
	switch($_GET['acao']){

        case 'adiciona':
            if(!isset($_POST['adiciona'])){ 
                include "views/cadastraUsuario.php";              
            }
            else{
                $obj = new Usuario();
                $obj->setNomeLogin($_POST['field_nomeLogin']);
                $obj->setSenha($_POST['field_senha']);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraUsuario.php";                       
                }
            }
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

