<?php require_once("../includes/header.php");?>

<div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
        echo "<ul>";
        foreach($erros as $e)
            echo "<li>$e</li>";
    }
    $mes = isset($_POST['filtroMes']) ? $_POST['filtroMes'] : "";
    $tipo = isset($_POST['filtroTipo']) ? $_POST['filtroTipo'] : "";

    ?>
</div>

<div class="container-filtros-relatorio">

    <div class="div-filtros-relatorio-tipo">
        <label class="" for="id_tipo">Tipo de relatório</label>
        <select class="select-relatorio" id="id_tipo"  name="filtroTipo" onchange="fazerRelatorio()" required >
            <option value="prod" value="<?=$tipo?>" <?=($_GET['acao']  == 'prod')?'selected':''?>>Produção</option>
            <option value="ins" value="<?=$tipo?>" <?=($_GET['acao']  == 'ins')?'selected':''?>>Inseminação</option>
            <option value="prevSec" value="<?=$tipo?>" <?=($_GET['acao']  == 'prevSec')?'selected':''?>>Previsão de secagem</option>
            <option value="prevPa" value="<?=$tipo?>" <?=($_GET['acao']  == 'prevPa')?'selected':''?>>Previsão de parto</option>
        </select>
    </div>    

    <div  class="div-filtros-relatorio-mes">
        <label class="" for="id_mes">Mês do relatório</label>
        <select  class="select-relatorio" id="id_mes"  name="filtroMes" onchange="fazerRelatorio()" required >
            <option value="01" value="<?=$mes?>" <?=($_GET['filtroMes']  == '01')?'selected':''?>>Janeiro</option>
            <option value="02" value="<?=$mes?>" <?=($_GET['filtroMes']  == '02')?'selected':''?>>Fevereiro</option>
            <option value="03" value="<?=$mes?>" <?=($_GET['filtroMes']  == '03')?'selected':''?>>Março</option>
            <option value="04" value="<?=$mes?>" <?=($_GET['filtroMes']  == '04')?'selected':''?>>Abril</option>
            <option value="05" value="<?=$mes?>" <?=($_GET['filtroMes']  == '05')?'selected':''?>>Maio</option>
            <option value="06" value="<?=$mes?>" <?=($_GET['filtroMes']  == '06')?'selected':''?>>Junho</option>
            <option value="07" value="<?=$mes?>" <?=($_GET['filtroMes']  == '07')?'selected':''?>>Julho</option>
            <option value="08" value="<?=$mes?>" <?=($_GET['filtroMes']  == '08')?'selected':''?>>Agosto</option>
            <option value="09" value="<?=$mes?>" <?=($_GET['filtroMes']  == '09')?'selected':''?>>Setembro</option>
            <option value="10" value="<?=$mes?>" <?=($_GET['filtroMes']  == '10')?'selected':''?>>Outubro</option>
            <option value="11" value="<?=$mes?>" <?=($_GET['filtroMes']  == '11')?'selected':''?>>Novembro</option>
            <option value="12" value="<?=$mes?>" <?=($_GET['filtroMes']  == '12')?'selected':''?>>Dezembro</option>
        </select>
    </div>
    <button class="relatorio-a" type="submit" onClick="fazerRelatorio()"><i class="fas fa-search"></i></button>
</div>
<script src="../js/relatorio.js"></script>