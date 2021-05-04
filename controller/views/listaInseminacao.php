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

<div class="lista_fichas">
      <h1>Histórico de inseminação</h1>  
        <?php
        require_once "../controller/classes/InseminacaoDAO.php";
        $obj = new InseminacaoDAO();
        $lista = $obj->buscar($codAnimal); 
        if(count($lista) == 0){
            echo "Nenhuma ficha encontrada.";
        }else{
            foreach ($lista as $inseminacao){
        ?>     
        <div class="ficha-historico">
            <div class="label">
                <div class="ficha_descricao">
                <strong>Cód.: <?=$inseminacao->getCodAnimal()?> </strong>
                <strong>Cód.: <?=$inseminacao->getCodInseminacao()?> </strong>
                <strong>Touro: <?=$inseminacao->getTouroInseminador()?> </strong>
                <?=$inseminacao->getDtInseminacao()?>

              </div>
              <div>
                <button name="altera" class="button-edit" onclick="window.location.href='inseminacaoController.php?acao=altera&codInseminacao=<?=$inseminacao->getCodInseminacao() ?>'"><i class="fa fa-edit fa-1x"></i></button>
                <button name="exclui" class="button-delete" onclick=""><i class="fa fa-trash-alt fa-1x"></i></button>
              </div>
            </div>
        </div>
    <?php
        }
      }
    ?>
  </div>
  
  <script src="/js/lista-fichas.js"></script>

</body>    