<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/adicionar-ficha.css" rel="stylesheet">
    <link href="/css/lista-fichas.css" rel="stylesheet">
</head>

<body>

<div>
          <?php
            // $conexao = mysqli_connect("localhost", "admpizza", "12345", "pizza");
            // $sql = "select * from sabor";
            // $resultado = mysqli_query($conexao, $sql);
            // mysqli_close($conexao);            
            // while($array = mysqli_fetch_assoc($resultado)){ // para cada sabor

            require_once "classes/FichaDAO.php";
            $obj = new FichaDAO();
            $lista = $obj->listar(); 
            if(count($lista) == 0){
                echo "Nenhuma ficha encontrada.";
            }
            else{
                foreach ($lista as $ficha){
                ?>            

              <div class="ficha">
                <div class="label">
                  <div class="ficha_img">
                    <img src="/img/<?=$ficha->getNomeImagem()?>" alt="imagem_animal">
                  </div>
                  <div class="ficha_descricao">
                    <strong><?=$ficha->getCodigoAnimal()?></strong>
                    <?=$ficha->getDataNascimento()?>
                  </div>
                  <div>
                    <button class="button-edit"><i class="fa fa-edit fa-1x"></i></button>
                    <button class="button-delete" onclick="verificarExcluir(4)"><i class="fa fa-trash-alt fa-1x"></i></button>
                  </div>
                </div>
              </div>

              <?php
                }
              

              }
            ?>

            
    
    </div>

  <script src="/js/script.js"></script>
  <script src="/js/lista-fichas.js"></script>

</body>