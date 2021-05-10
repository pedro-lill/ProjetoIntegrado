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
            <select id="id_mes" required >
                <option name="field_mes" value="jan" value="<?=$mes?>">Janeiro</option>
                <option name="field_mes" value="fev" value="<?=$mes?>">Fevereiro</option>
                <option name="field_mes" value="mar" value="<?=$mes?>">Março</option>
                <option name="field_mes" value="mai" value="<?=$mes?>">Maio</option>
                <option name="field_mes" value="abr" value="<?=$mes?>">Abril</option>
                <option name="field_mes" value="jun" value="<?=$mes?>">Junho</option>
                <option name="field_mes" value="jul" value="<?=$mes?>">Julho</option>
                <option name="field_mes" value="ago" value="<?=$mes?>">Agosto</option>
                <option name="field_mes" value="set" value="<?=$mes?>">Setembro</option>
                <option name="field_mes" value="out" value="<?=$mes?>">Outubro</option>
                <option name="field_mes" value="nov" value="<?=$mes?>">Novembro</option>
                <option name="field_mes" value="dez" value="<?=$mes?>">Dezembro</option>
            </select>
            <button class="button-form" type="submit" onclick="window.location.href='../controller/relatorioController.php?acao=adiciona&filtroMes=<?=$_POST['field_mes'] ?>'"><i class="fas fa-search"></i></button>
        <div>
    </form>

    <?php
        require_once "../controller/classes/inseminacaoDAO.php";
        $obj = new inseminacaoDAO();
        $lista = $obj->buscaMes($inseminacao->getDtInseminacao()); 
        if(count($lista) == 0){
            echo "Nenhuma animal encontrada.";
        }else{
            foreach ($lista as $inseminacao);
        }
        ?> 
    

<?php require_once("../includes/footer.php");?>