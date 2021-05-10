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
            <select id="id_mes"  name="field_mes" required >
                <option value="01" value="<?=$mes?>">Janeiro</option>
                <option value="02" value="<?=$mes?>">Fevereiro</option>
                <option value="03" value="<?=$mes?>">Março</option>
                <option value="04" value="<?=$mes?>">Maio</option>
                <option value="05" value="<?=$mes?>">Abril</option>
                <option value="06" value="<?=$mes?>">Junho</option>
                <option value="07" value="<?=$mes?>">Julho</option>
                <option value="08" value="<?=$mes?>">Agosto</option>
                <option value="09" value="<?=$mes?>">Setembro</option>
                <option value="10" value="<?=$mes?>">Outubro</option>
                <option value="11" value="<?=$mes?>">Novembro</option>
                <option value="12" value="<?=$mes?>">Dezembro</option>
            </select>
            <button name="filtro" class="button-form" type="submit"><i class="fas fa-search"></i></button>
        <div>
    </form>
    
<?php include("../controller/views/listaAnimal.php");?>
<?php include("../controller/views/listaInseminacao.php");?>
<?php include("../controller/views/listaProducao.php");?>
<?php include("../controller/views/listaTratamento.php");?>

<?php require_once("../includes/footer.php");?>