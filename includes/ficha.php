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

    <div class="ficha">
        <div class="label">
          <div class="ficha_img">
            <img src="/img/animal1.jpg" alt="imagem_animal">
          </div>
          <div class="ficha_descricao">
            <strong>Mimosa</strong>
            Código: 23 / Nasc.: 23/11/2011
          </div>
          <div>
            <button class="button-edit"><i class="fa fa-edit fa-1x"></i></button>
            <button class="button-delete" onclick="verificarExcluir(4)"><i class="fa fa-trash-alt fa-1x"></i></button>
          </div>
        </div>
      </div>
    </div>

  <script src="/js/script.js"></script>
  <script src="/js/lista-fichas.js"></script>

</body>