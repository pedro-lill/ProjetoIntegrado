<?php require_once("../includes/header.php");?>
<?php
include_once "../controller/classes/InseminacaoDAO.php";
if(!isset($_GET['acao'])){
    $obj = new InseminacaoDAO();
    $lista = $obj->listar();
    include "../views/previsoes.php";
}
else {    
	switch($_GET['acao']){
        
        case 'previsao':
            if(!isset($_POST['previsao'])){
                include_once "../controller/classes/ProducaoDAO.php";
                include "../views/previsoes.php";
                include "views/previsaoParto.php";
                include "../includes/footer.php";
            }else{
                include "../views/previsoes.php";
            }
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

