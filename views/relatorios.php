<?php require_once("../includes/header.php");?>

<div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
        echo "<ul>";
        foreach($erros as $e)
            echo "<li>$e</li>";
        echo "</ul>";
    }
    $mes = isset($_POST['field_mes']) ? $_POST['field_mes'] : "";
    ?>
</div>

    <h3>RELATÓRIOS</h3>
    <select class="select-relatorio" id="id_mes"  name="field_mes" required >
        <option value="01" value="<?=$mes?>" <?=($_GET['field_mes']  == '01')?'selected':''?>>Janeiro</option>
        <option value="02" value="<?=$mes?>" <?=($_GET['field_mes']  == '02')?'selected':''?>>Fevereiro</option>
        <option value="03" value="<?=$mes?>" <?=($_GET['field_mes']  == '03')?'selected':''?>>Março</option>
        <option value="04" value="<?=$mes?>" <?=($_GET['field_mes']  == '04')?'selected':''?>>Abril</option>
        <option value="05" value="<?=$mes?>" <?=($_GET['field_mes']  == '05')?'selected':''?>>Maio</option>
        <option value="06" value="<?=$mes?>" <?=($_GET['field_mes']  == '06')?'selected':''?>>Junho</option>
        <option value="07" value="<?=$mes?>" <?=($_GET['field_mes']  == '07')?'selected':''?>>Julho</option>
        <option value="08" value="<?=$mes?>" <?=($_GET['field_mes']  == '08')?'selected':''?>>Agosto</option>
        <option value="09" value="<?=$mes?>" <?=($_GET['field_mes']  == '09')?'selected':''?>>Setembro</option>
        <option value="10" value="<?=$mes?>" <?=($_GET['field_mes']  == '10')?'selected':''?>>Outubro</option>
        <option value="11" value="<?=$mes?>" <?=($_GET['field_mes']  == '11')?'selected':''?>>Novembro</option>
        <option value="12" value="<?=$mes?>" <?=($_GET['field_mes']  == '12')?'selected':''?>>Dezembro</option>
    </select>
    <button class="relatorio-a" type="submit" onClick="fazerRelatorio()"><i class="fas fa-search"></i></button>
    <script src="../js/relatorio.js"></script>