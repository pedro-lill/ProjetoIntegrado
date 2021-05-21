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
          <li><a class="altura_js" href="" onclick="window.open('http://api.whatsapp.com/send?1=pt_BR&phone=5554999939468','_system', 'location=yes'); return false;">Contato</a></li>
          <li><a class="altura_js" href="https://www.google.com/maps/dir//'-27.994195,-52.788219'/@-27.9941773,-52.8582593,12z/data=!4m6!4m5!1m0!1m3!2m2!1d-52.788219!2d-27.994195">Ver rota</a></li>
          <li><a class="altura_js" href="#Atendimento">Horario de atendimento</a></li>
      </ul>
    </header>

    <div>
        <img class="banner" title="Foto da cooperativa" src="img/banner.png" />
    </div>

    <div class="textoCooperativa" id="TextoSobreJS">
        <h2>COOPTAR - Cascata</h2>
        <p>Acreditamos que cada litro de leite representa em seu próprio ser uma experiência completa.</p>
    </div>

    <div class="fotosCooperativa" id="FotosJS">
        <h2>Galeria de fotos</h2>
        <section class="galeria">
            <a><img src="img/imgCoop1.jpg" onclick="" /></a>
            <a><img src="img/imgCoop2.jpg" onclick="" /></a>
            <a><img src="img/imgCoop3.jpg" onclick="" /></a>
            <a><img src="img/imgCoop4.jpg" onclick="" /></a>
            <a><img src="img/imgCoop5.jpg" onclick="" /></a>
            <a><img src="img/imgCoop6.jpg" onclick="" /></a>
        </section>
    </div>

    <div class="contato" id="ContatoJS">
        <form class="form" action="https://api.staticforms.xyz/submit" method="post">
            <h2>Entre em contato conosco!</h2>
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
            <textarea placeholder="Digite a sua mensagem" name="message" maxlength="600" required></textarea>
            </div>
            <button class="field-enviar" type="submit">Enviar</button>
        </form>
    </div>

    <div class="container-divs">
        <div class="div-rota">
            <h2>Localização</h2>
            <button class="button-rota">Rota</button>
        </div>

        <div class="div-funcionamento" id="Atendimento">
            <h2>Horário de funcionamento</h2></h2>
            <table>
                <tr>
                    <th>Dia</th>
                    <th>Horário</th>
                </tr>
                <tr>
                    <td>Segunda</td>
                    <td>08:00 - 12:00, 13:30 - 17:30</td>
                </tr>
                <tr>
                    <td>Terça</td>
                    <td>08:00 - 12:00, 13:30 - 17:30</td>
                </tr>
                <tr>
                    <td>Quarta</td>
                    <td>08:00 - 12:00, 13:30 - 17:30</td>
                </tr>
                <tr>
                    <td>Quinta</td>
                    <td>08:00 - 12:00, 13:30 - 17:30</td>
                </tr>
                <tr>
                    <td>Sexta</td>
                    <td>08:00 - 12:00, 13:30 - 17:30</td>
                </tr>
            </table>
        </div>
    </div>

    <footer class="main__footer" id="FooterJS">

        <div class="container__footer">

            <div class="container__icons">
                <ul>
                    <li><a href="https://www.instagram.com/movimentosemterra/?hl=pt-br"><img src="/img/instagram.svg" height="45" width="45"></a></li>
                    <li><a onclick="window.open('http://api.whatsapp.com/send?1=pt_BR&phone=5554999939468','_system', 'location=yes'); return false;"><img src="img/whatsapp.svg" height="45" width="45"></a></li>
                    <li><a href="cooptarcascata@gmail.com"><img src="img/o-email.svg" width="45" height="45"></a></li>
                </ul>
            </div>

            <div class="container__text">
                <span>Assentamento 16 de Março</span>
                <span>CEP: 99190-000</span>
                <span>Pontão - RS</span>
                <span>cooptarcascata@gmail.com</span>
                <span>(54) 3503-0195</span>
                <span>CNPJ: 22333991100</span>
            </div>

            <div class="container__location">
                <iframe class="map--google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1519.9125122962685!2d-52.788805162943426!3d-27.994238030769274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fcd41d897baa35%3A0x32d693b15a02d822!2sCooptar%20-%20Cooperativa%20de%20Produ%C3%A7%C3%A3o%20Agropecu%C3%A1ria%20Cascata!5e0!3m2!1spt-BR!2sbr!4v1621616755945!5m2!1spt-BR!2sbr" style="border:none;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>

    </footer>
<script src="js/index.js"></script>
</body>
</html>