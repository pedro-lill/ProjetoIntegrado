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

    <?php require_once("../includes/header.php");?>
    <h3>LISTA DE ANIMAIS</h3>
    <div class="lista_animais">
        
        <button class="button-form-adicionar-animal" onclick="window.location.href='animalController.php?acao=adiciona'">Adicionar animal</button>

          <?php
          require_once "../controller/classes/AnimalDAO.php";
          $obj = new AnimalDAO();
          $lista = $obj->listar(); 
          if(count($lista) == 0){
              echo "Nenhuma animal encontrada.";
          }else{
              foreach ($lista as $animal){
          ?>     

          <div class="animal">
              <div class="label">
                  <div class="animal_img">
                      <img src="../img/<?=$animal->getNomeImagem()?>" alt="imagem_animal">
                  </div>
                  <div class="animal_descricao">
                      <strong>Cód.: </strong> <?=$animal->getCodAnimal()?> <br>
                      <strong>Cód. mãe: </strong> <?=$animal->getCodMae() ?> <br>
                      <strong>Nome pai: </strong>  <?=$animal->getNomePai() ?> <br>
                      <strong>Data nasc.: </strong> <?=date('d/m/Y', strtotime("+0 days",strtotime($animal->getDtNascimento())));?>
                  </div>
                  <div>
                      <button class="button-edit" onclick="window.location.href='animalController.php?acao=altera&codAnimal=<?=$animal->getCodAnimal() ?>'"><i class="fa fa-edit fa-1x"></i></button>
                      <button class="button-delete" onclick='verificarExcluir(<?=$animal->getCodAnimal()?>)'><i class="fa fa-trash-alt fa-1x"></i></button>
                  </div>
              </div>
          </div>
            
      <?php
          }
        }
      ?>

    </div>

    <?php require_once("../includes/footer.php");?>

    <script src="/js/lista-animais.js"></script>