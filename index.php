<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../img/mstRedondo.png">
  <meta name="author" content="Fabrício Romani e Pedro Lill">
  <meta name="description" content="Cooptar - cooperativa agropecuária">
  <meta name="keywords" content="mst, cooperativa, pontão, agropecuária, bovino">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/index.css">
  <title>COOPTAR</title>
</head>

<body>

<header>
  <a href="login.php">COOPTAR - Cooperativa de produção agropecuaria Cascata</a> 
  <ul id="PrecisoParajs">
      <li><a href="">Ligue agora</a></li>
      <li><a href="">Ver rota</a></li>
      <li><a href="">Horario de atendimento</a></li>
  </ul>
</header>

<div>
        <img class="banner" title="Foto da pizzaria" src="img/banner.png" />
    </div>

    <div class="textoPizzaria" id="TextoSobreJS">
        <h2>Pizzaria Hermanos</h2>
        <p>Acreditamos que cada pedaço de pizza representa em seu próprio ser uma experiência completa.</p>
    </div>

    <div class="fotosPizzaria" id="FotosJS">
        <h2>Galeria de fotos</h2>

        <section class="galeria">
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria1.jfif" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria2.jfif" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria3.jfif" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria4.jpg" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria5.jfif" alt="imagem-promocao" onclick="" /></a>
            <a href="views/quemSomos.php"><img src="img/imagemPizzaria6.jpg" alt="imagem-promocao" onclick="" /></a>
        </section>
    </div>

    <div class="contato" id="ContatoJS">
        <form class="form">
            <h2>Faça seu pedido!</h2>
            <div class="div-metade">
            <input placeholder="Nome" type="text" required>
            </div>
            <div class="div-metade">
            <input placeholder="Telefone" type="number" required>
            </div>
            <div class="div-inteira">
            <input placeholder="E-mail" type="email" required>
            </div>
            <div class="div-inteira">
            <input type="text" placeholder="Digite sua mensagem aqui" maxlength="600" required></input>
            </div>
            <button class="field-enviar" type="submit">Enviar</button>
        </form>
    </div>

<script src="js/header.js"></script>

<?php require_once("includes/footer.php");?>
</body>
</html>