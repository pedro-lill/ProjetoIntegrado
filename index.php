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

<footer class="main__footer" id="FooterJS">

<div class="container__footer">
    <div class="container__icons">
        <ul>
            <li>
                <a href="https://www.instagram.com/semfronteirasjr/"><img src="/img/instagram(1).svg" height="45" width="45"></a>
            </li>
            <li>
                <a href="https://br.linkedin.com/company/semfronteirasconsultoriajr"><img src="img/linkedin.svg" height="45" width="45"></a>
            </li>
            <li>
                <a href="https://www.facebook.com/SemFronteirasConsultoriaJr"><img src="img/facebook.svg" width="45" height="45"></a>
            </li>
            <li>
                <a href="mailto:ej.semfronteiras@gmail.com"><img src="img/o-email.svg" width="45" height="45"></a>
            </li>
        </ul>
    </div>

    <div class="container__text">
        <span>Universidade Federal da Fronteira Sul</span>
        <span>Sala 222 - Bloco B</span>
        <span>festec@fronteiratec.com</span>
        <span>Chapecó - SC</span>
        <span>(54) 999223311</span>
        <span>CNPJ 22333991100</span>
        <span>CEP 11993-1</span>
    </div>

    <div class="container__location">
        <iframe class="map--google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113646.78846818066!2d-52.732016345498185!3d-27.11024528476605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fb4b2bbbd96a4b%3A0x5871f4d6809cb67e!2sUniversidade%20Federal%20da%20Fronteira%20Sul%2C%20Campus%20Chapec%C3%B3!5e0!3m2!1spt-BR!2sbr!4v1597082565539!5m2!1spt-BR!2sbr"
            style="border:none;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>

<div class="container__copy">
    <h5>&copy Desenvolvido por FronteiraTec</h5>
</div>
</footer>
</body>
</html>