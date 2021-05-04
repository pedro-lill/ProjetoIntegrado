<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/adicionar-ficha.css" rel="stylesheet">
  <link href="../css/lista-fichas.css" rel="stylesheet">
</head>

<body>

<?php require_once("../includes/header.php");?>

<div class="lista_fichas">
      <h1>Histórico de produção de leite</h1>  
        <?php
        require_once "../controller/classes/ProducaoDAO.php";
        $obj = new ProducaoDAO();
        $lista = $obj->buscar($codAnimal); 
        if(count($lista) == 0){
            echo "Nenhuma ficha encontrada.";
        }else{
            foreach ($lista as $producao){
        ?>     
        <div class="ficha-historico">
            <div class="label">
                <div class="ficha_descricao">
                <strong>Cód.: <?=$producao->getCodAnimal()?> </strong>
                <strong>Litros: <?=$producao->getLitros()?> </strong>
                <?=$producao->getDtColeta()?>  <?=$producao->getPeriodoDia()?>
                </div>
                <div>
                    <button name="altera" class="button-edit" onclick=""><i class="fa fa-edit fa-1x"></i></button>
                    <button name="exclui" class="button-delete" onclick=""><i class="fa fa-trash-alt fa-1x"></i></button>
                </div>
            </div>
        </div>
    <?php
        }
      }
    ?>
  </div>

  <?php require_once("../includes/footer.php");?>
  
  <script src="/js/lista-fichas.js"></script>

</body>    