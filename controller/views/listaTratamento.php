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

<body>

<div class="lista_animais">
    <?php
    require_once "../controller/classes/TratamentoDAO.php";
    $obj = new TratamentoDAO();
    $lista = $obj->buscaLista($codAnimal); 
    ?>
    <h3>Históricos de tratamentos do animal (cód. <?=$codAnimal?>)</h3>      
    <?php
    if(count($lista) == 0){
        echo "Nenhuma animal encontrada.";
    }else{
        foreach ($lista as $tratamento){
    ?>
         
      <div class="animal-historico">
        <div class="label">
          <div class="animal_descricao">
          <strong>Motivo:  </strong> <?=$tratamento->getMotivoTratamento()?> <br> 
          <strong>Remédio:  </strong> <?=$tratamento->getNomeMedicamento()?> <br>
          <strong>Data:  </strong> <?=date('d/m/Y', strtotime("+0 days",strtotime($tratamento->getDtTratamento())));?> <br>
          </div>
          <div>
            <button name="altera" class="button-edit" onclick="window.location.href='tratamentoController.php?acao=altera&codTratamento=<?=$tratamento->getCodTratamento() ?>'"><i class="fa fa-edit fa-1x"></i></button>
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

</body>    