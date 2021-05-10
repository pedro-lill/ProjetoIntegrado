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
               
                require_once "../controller/classes/inseminacaoDAO.php";
                $obj = new inseminacaoDAO();
                $lista = $obj->buscaMes($_GET['filtroMes']);
                if(count($lista) == 0){
                    echo "Nenhuma animal encontrada.";
                }else{
                    foreach ($lista as $inseminacao){
                ?>     
                <div class="animal">
                    <div class="label">
                        <div class="animal_descricao">
                            <strong>Código Animal: <?=$inseminacao->getCodAnimal()?> </strong>
                            <strong>Touro inseminador: <?=$inseminacao->getTouroInseminador()?> </strong>
                            <strong>Data inseminação: <?=$inseminacao->getDtInseminacao()?> </strong>
                        </div>
                    </div>
                </div>
            <?php
                }
              }
                
            }
            break;
        
        default:
            echo "Ação não permitida";  
                      
    }
} 

?>

