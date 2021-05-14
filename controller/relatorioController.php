<?php require_once("../includes/header.php");?>
<?php
if(!isset($_GET['acao'])){
    include "../views/relatorios.php";
}
else {    
	switch($_GET['acao']){
        
        case 'ins':
            if(!isset($_POST['ins'])){
                include_once "../controller/classes/inseminacaoDAO.php";
                include "../views/relatorios.php";
                include "views/relatorioInseminacao.php";
                include "../includes/footer.php";

            }else{
                include "../views/relatorios.php";
            }
            break;

            case 'prod':
                if(!isset($_POST['prod'])){
                    include_once "../controller/classes/ProducaoDAO.php";
                    include "../views/relatorios.php";
                    include "views/relatorioProducao.php";
                    include "../includes/footer.php";
                }else{
                    include "../views/relatorios.php";
                }
                break;
            
            case 'prevSec':
                if(!isset($_POST['prevSec'])){
                    include_once "../controller/classes/inseminacaoDAO.php";
                    include "../views/relatorios.php";
                    include "views/relatorioPrevisaoSecagem.php";
                    include "../includes/footer.php";
                }else{
                    include "../views/relatorios.php";
                   
                }
                break;

            case 'prevPa':
                if(!isset($_POST['prevPa'])){
                    include_once "../controller/classes/inseminacaoDAO.php";
                    include "../views/relatorios.php";
                    include "views/relatorioPrevisaoPartos.php";
                    include "../includes/footer.php";
                }else{
                    include "../views/relatorios.php";
                }
                break;

            default:
                echo "Ação não permitida"; 
        }

    }
    


?>

