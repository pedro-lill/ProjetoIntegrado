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
        <select class="select-relatorio" id="id_tipo" value="tipo"  name="filtroTipo" onchange="fazerRelatorio()" required >
            <option value="prod"    <?=($_GET['acao']  == 'prod')?'selected':''?>>Produção</option>
            <option value="ins"     <?=($_GET['acao']  == 'ins')?'selected':''?>>Inseminação</option>
            <option value="prevSec" <?=($_GET['acao']  == 'prevSec')?'selected':''?>>Previsão de secagem</option>
            <option value="prevPa"  <?=($_GET['acao']  == 'prevPa')?'selected':''?>>Previsão de parto</option>
        </select>
    </div>

    <div  class="div-filtros-relatorio-mes">
        <label class="" for="id_ano">Ano do relatório</label>
        <select  class="select-relatorio" id="id_ano" value="ano" name="filtroAno" onchange="fazerRelatorio()" required >
            <option value="2018" <?=($_GET['filtroAno']  == '2018')?'selected':''?>>2018</option>
            <option value="2019" <?=($_GET['filtroAno']  == '2019')?'selected':''?>>2019</option>
            <option value="2020" <?=($_GET['filtroAno']  == '2020')?'selected':''?>>2020</option>
            <option value="2021" <?=($_GET['filtroAno']  == '2021')?'selected':''?>>2021</option>
            <option value="2022" <?=($_GET['filtroAno']  == '2022')?'selected':''?>>2022</option>
            <option value="2023" <?=($_GET['filtroAno']  == '2023')?'selected':''?>>2023</option>
        </select>
    </div>

    <div  class="div-filtros-relatorio-mes">
        <label class="" for="id_mes">Mês do relatório</label>
        <select  class="select-relatorio" id="id_mes" value="mes" name="filtroMes" onchange="fazerRelatorio()" required >
            <option value="01" <?=($_GET['filtroMes']  == '01')?'selected':''?>>Janeiro</option>
            <option value="02" <?=($_GET['filtroMes']  == '02')?'selected':''?>>Fevereiro</option>
            <option value="03" <?=($_GET['filtroMes']  == '03')?'selected':''?>>Março</option>
            <option value="04" <?=($_GET['filtroMes']  == '04')?'selected':''?>>Abril</option>
            <option value="05" <?=($_GET['filtroMes']  == '05')?'selected':''?>>Maio</option>
            <option value="06" <?=($_GET['filtroMes']  == '06')?'selected':''?>>Junho</option>
            <option value="07" <?=($_GET['filtroMes']  == '07')?'selected':''?>>Julho</option>
            <option value="08" <?=($_GET['filtroMes']  == '08')?'selected':''?>>Agosto</option>
            <option value="09" <?=($_GET['filtroMes']  == '09')?'selected':''?>>Setembro</option>
            <option value="10" <?=($_GET['filtroMes']  == '10')?'selected':''?>>Outubro</option>
            <option value="11" <?=($_GET['filtroMes']  == '11')?'selected':''?>>Novembro</option>
            <option value="12" <?=($_GET['filtroMes']  == '12')?'selected':''?>>Dezembro</option>
        </select>
    </div>
    <button class="relatorio-a" type="submit" onClick="fazerRelatorio()"><i class="fas fa-search"></i></button>
</div>
<script src="../js/relatorio.js"></script>