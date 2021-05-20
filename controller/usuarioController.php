<?php
include_once "../controller/classes/UsuarioDAO.php";
if(!isset($_GET['acao'])){
    $obj = new UsuarioDAO();
    
    include "../views/configuracoes.php";
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
                $senhaCriptografada = base64_encode($_POST['field_senha']);
                $obj->setSenha($senhaCriptografada);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/cadastraUsuario.php";                       
                }
                else{
                    $bd = new UsuarioDAO();
                    if($bd->inserir($obj))
                        header("Location: usuarioController.php"); 
                }
            }
            break;

            case 'altera':
                if(!isset($_POST['altera'])){ 
                    include "views/alteraUsuario.php";              
                }
                else{
                    $obj = new Usuario();
                    $obj->setNomeLogin($_POST['field_nomeLogin']);
                    $obj->setSenha($_POST['field_senha']);
                    $erros = $obj->validate();
                    if(count($erros) != 0){ 
                        include "views/alteraUsuario.php";                       
                    }
                    else{
                        $bd = new UsuarioDAO();
                        if($bd->inserir($obj))
                            header("Location: usuarioController.php"); 
                    }
                }
                break;
                case 'logar':
                    if(!isset($_POST['logar'])){ 
                        include "../index.php";              
                    }else{
                        $bd = new UsuarioDAO();
                        $obj->setNomeLogin($_POST['nomeLogin']);
                        $obj->setSenha($_POST['senha']);
                        $senhaCriptografada = base64_encode($_POST['senha']);
                        $query = $bd->acessar($obj->setNomeLogin($_POST['nomeLogin']), $senhaCriptografada);
                        if(count($query) == 1)
                            header("Location: ../views/graficos.php"); 
                        else{
                            header("Location: ../views/configuracoes.php"); 
                        }
                    }
                        
                break;

        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

