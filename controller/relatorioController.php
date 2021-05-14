<?php require_once("../includes/header.php");?>
<?php
include_once "../controller/classes/inseminacaoDAO.php";
if(!isset($_GET['acao'])){
    $obj = new InseminacaoDAO();
    $lista = $obj->listar();
    include "../views/relatorios.php";
}
else {    
	switch($_GET['acao']){
        
        case 'filtromes':
            if(!isset($_POST['filtromes'])){ 
                include("../views/relatorios.php");
                include("views/relatorioInseminacao.php");
                include("../includes/footer.php");

            }
            break;

            case 'filtroprod':
                include_once "../controller/classes/ProducaoDAO.php";
                if(!isset($_GET['acao'])){
                    $obj = new ProducaoDAO();
                    $lista = $obj->listar();
                    include "../views/relatorios.php";
                }else{
                    include("../views/relatorios.php");
                    include("views/relatorioProducao.php");
                    include("../includes/footer.php");
                }
                break;
    
            default:
                echo "Ação não permitida"; 
        }

    }
    


?>

