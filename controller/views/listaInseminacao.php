<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/mst.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/adicionar-animal.css" rel="stylesheet">
  <link href="../css/lista-animais.css" rel="stylesheet">
</head>

<div class="lista_animais">
  <?php
    require_once "../controller/classes/InseminacaoDAO.php";
    $obj = new InseminacaoDAO();
    $lista = $obj->buscaLista($codAnimal); 
    ?>
    <h3>Históricos de inseminações do animal (cód. <?=$codAnimal?>)</h3>      
    <?php
    if(count($lista) == 0){
    ?>
       <div class="div-nenhum-historico">
        <p>Nenhum histórico de inseminação foi encontrado.</p>
       </div>
    <?php
    }else{
      foreach ($lista as $inseminacao){
    ?>   
      <div class="animal-historico">
          <div class="label">
              <div class="animal_descricao">
              <strong>Touro: </strong> <?=$inseminacao->getTouroInseminador()?> <br>
              <strong>Responsável: </strong> <?=$inseminacao->getInseminadorResponsavel()?> <br>
              <strong>Data: </strong> <?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtInseminacao())));?>
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

<script src="/js/lista-animais.js"></script>   