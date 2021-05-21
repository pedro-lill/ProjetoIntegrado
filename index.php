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
        <img class="banner" title="Foto da cooperativa" src="img/banner.png" />
    </div>

    <div class="textoCooperativa" id="TextoSobreJS">
        <h2>COOPTAR - Cascata</h2></h2>
        <p>Acreditamos que cada litro de leite representa em seu próprio ser uma experiência completa.</p>
    </div>

    <div class="fotosCooperativa" id="FotosJS">
        <h2>Galeria de fotos</h2>

        <section class="galeria">
            <a><img src="img/imagemPizzaria1.jfif"onclick="" /></a>
            <a><img src="img/imagemPizzaria2.jfif"onclick="" /></a>
            <a><img src="img/imagemPizzaria3.jfif"onclick="" /></a>
            <a><img src="img/imagemPizzaria4.jpg" onclick="" /></a>
            <a><img src="img/imagemPizzaria5.jfif"onclick="" /></a>
            <a><img src="img/imagemPizzaria6.jpg" onclick="" /></a>
        </section>
    </div>

    <div class="contato" id="ContatoJS">
        <form class="form" action="https://api.staticforms.xyz/submit" method="post">
            <h2>Faça seu pedido!</h2>
            <input type="hidden" name="accessKey" value="591db03e-aa17-4129-a006-22cbee72565c"> 
            <input type="hidden" name="redirectTo" value="https://google.com">
            <div class="div-metade">
            <input placeholder="Nome" name="name" type="text" required>
            </div>
            <div class="div-metade">
            <input placeholder="Telefone" name="phone" type="number" required>
            </div>
            <div class="div-inteira">
            <input placeholder="E-mail" name="email" type="email" required>
            </div>
            <div class="div-inteira">
            <textarea name="message" maxlength="600" required></textarea>
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
        <span>Cooperativa Cascata</span>
        <span>festec@fronteiratec.com</span>
        <span>Pontão - RS</span>
        <span>(54) 999223311</span>
        <span>CNPJ 22333991100</span>
        <span>CEP 11993-1</span>
    </div>

    <div class="container__location">
    <iframe class="map--google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1519.9125122962685!2d-52.788805162943426!3d-27.994238030769274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fcd41d897baa35%3A0x32d693b15a02d822!2sCooptar%20-%20Cooperativa%20de%20Produ%C3%A7%C3%A3o%20Agropecu%C3%A1ria%20Cascata!5e0!3m2!1spt-BR!2sbr!4v1621616755945!5m2!1spt-BR!2sbr" 
            style="border:none;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>

</footer>
</body>
</html>