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
        
        case 'filtro':
            if(!isset($_POST['filtro'])){ 
               
                include("../views/relatorios.php");
                include("views/relatorioInseminacao.php");
                include("../includes/footer.php");

            }
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

