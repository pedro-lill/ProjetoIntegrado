<?php require_once("../includes/header.php");?>

<?php require_once("../includes/conexao.php");
    require_once("../includes/calendario.php");
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

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/calendario.js"></script>

<?php require_once("../includes/footer.php");?>