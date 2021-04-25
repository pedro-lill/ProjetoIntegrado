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

    <button class="button-form" onclick="window.location.href='fichaController.php?acao=adiciona'">Adicionar ficha</button>
  
        <?php
        require_once "../controller/classes/FichaDAO.php";
        $obj = new FichaDAO();
        $lista = $obj->listar(); 
        if(count($lista) == 0){
            echo "Nenhuma ficha encontrada.";
        }else{
            foreach ($lista as $ficha){
        ?>     
   
        <div class="ficha">
            <div class="label">
                <div class="ficha_img">
                    <img src="../img/<?=$ficha->getNomeImagem()?>" alt="imagem_animal">
                </div>
                <div class="ficha_descricao">
                    <strong>Código: <?=$ficha->getCodAnimal()?> </strong>
                    <strong>Código da mãe: <?=$ficha->getCodMae() ?> </strong>
                </div>
                <div>
                    <button class="button-edit" onclick="window.location.href='fichaController.php?acao=altera&codAnimal=<?=$ficha->getCodAnimal() ?>'"><i class="fa fa-edit fa-1x"></i></button>
                    <button class="button-delete" onclick="window.location.href='fichaController.php?acao=exclui&codAnimal=<?=$ficha->getCodAnimal() ?>'"><i class="fa fa-trash-alt fa-1x"></i></button>
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