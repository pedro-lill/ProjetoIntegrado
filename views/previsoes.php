<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="shortcut icon" href="/img/mst.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" rel="stylesheet" />
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/adicionar-ficha.css" rel="stylesheet">
        <link href="/css/lista-fichas.css" rel="stylesheet">
        <link href="/css/graficos.css" rel="stylesheet">
        <link href="/css/tabelas.css" rel="stylesheet">
        <link href="/css/previsoes.css" rel="stylesheet">
        <link href="/css/calendario.css" rel="stylesheet">
        <title>COOPTAR</title>
    </head>

    <body>

    <?php require_once("/includes/header.php");?>

        <?php require_once("/includes/conexao.php");
            require_once("/includes/calendario.php");
            $info = array(
                'tabela' => 'eventos',
                'data' => 'data',
                'titulo' => 'titulo',
            );
        ?>

        <h1>PREVISÕES</h1>

        <div class="calendario">
            <?php 
                $eventos = montaEventos($info);
                montaCalendario($eventos);
            ?>
            <div class="legends">
                <span class="legenda"><span class="blue"></span> Eventos</span>
                <span class="legenda"><span class="red"></span> Hoje</span>
            </div>
        </div>

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/calendario.js"></script>
    </body>
</html>