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

<h1>RELATORIOS</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <select class="select-relatorio" id="id_mes"  name="field_mes" required >
                <option value="jan" value="<?=$mes?>">Janeiro</option>
                <option value="fev" value="<?=$mes?>">Fevereiro</option>
                <option value="mar" value="<?=$mes?>">Março</option>
                <option value="mai" value="<?=$mes?>">Maio</option>
                <option value="abr" value="<?=$mes?>">Abril</option>
                <option value="jun" value="<?=$mes?>">Junho</option>
                <option value="jul" value="<?=$mes?>">Julho</option>
                <option value="ago" value="<?=$mes?>">Agosto</option>
                <option value="set" value="<?=$mes?>">Setembro</option>
                <option value="out" value="<?=$mes?>">Outubro</option>
                <option value="nov" value="<?=$mes?>">Novembro</option>
                <option value="dez" value="<?=$mes?>">Dezembro</option>
            </select>
            <button class="relatorio-a" type="submit" onclick="window.location.href='../controller/relatorioController.php?acao=filtro&filtroMes=<?=['field_mes'] ?>'"><i class="fas fa-search"></i></button>
        <div>
    </form>
    
<?php include("../controller/views/relatorioInseminacao.php");?>

<?php require_once("../includes/footer.php");?>