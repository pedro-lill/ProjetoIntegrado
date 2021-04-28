<main>

    <div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) !=0){
        echo "<ul>";
        foreach($erros as $e)
          echo "<li>$e</li>";
        echo "</ul>";
    }
    echo $ficha->getDtNascimento();
    $codAnimal = isset($_POST['field_codAnimal']) ? $_POST['field_codAnimal'] : $ficha->getCodAnimal();
    $dtNascimento = isset($_POST['field_dtNascimento']) ? $_POST['field_dtNascimento'] : $ficha->getDtNascimento();
    $codMae = isset($_POST['field_codMae']) ? $_POST['field_codMae'] : $ficha->getCodMae();
    $nomePai = isset($_POST['field_nomePai']) ? $_POST['field_nomePai'] : $ficha->getNomePai();
    $estadoVida = isset($_POST['field_estadoVida']) ? $_POST['field_estadoVida'] : $ficha->getEstadoVida();
    $nomeImagem = isset($_FILES['field_imagem']['name'])?($_FILES['field_imagem']['name']) : $ficha->getNomeImagem();
    ?>
    </div>
    
    <?php require_once("../includes/header.php");?>

    <form action="" method="post" enctype="multipart/form-data">
      <div class="container-ficha">
        <h1>Dados da ficha </h1>
        <input type="number" placeholder="Código do animal" name="field_codAnimal" value="<?=$codAnimal ?>">
        <input type="datetime" name="field_dtNascimento" maxlength="100" value="<?=$dtNascimento?>">

        
        <input type="number" placeholder="Código mae" name="field_codMae" maxlength="100" value="<?=$codMae?>">
        <input type="text" placeholder="Nome do touro-pai" name="field_nomePai" maxlength="50" autofocus value="<?=$nomePai?>">
        <input type="number" placeholder="Estado de vida" name="field_estadoVida" maxlength="50" id="id_estadoVida" autofocus value="<?=$estadoVida?>">
        <input type="file" name="field_imagem" maxlength="50" id="id_nomeImagem" autofocus value="<?=$nomeImagem?>">
        <button name="altera" class="button-form" type="submit">Alterar</button>
      </div>
    </form>
    

    <div class="lista_fichas">
      <h1>Histórico de inseminação</h1>  
        <?php
        require_once "../controller/classes/InseminacaoDAO.php";
        $obj = new InseminacaoDAO();
        $lista = $obj->buscar($codAnimal); 
        if(count($lista) == 0){
            echo "Nenhuma ficha encontrada.";
        }else{
            foreach ($lista as $inseminacao){
        ?>     
        <div class="ficha-historico">
            <div class="label">
                <div class="ficha_descricao">
                <strong>Cód.: <?=$inseminacao->getCodAnimal()?> </strong>
                <strong>Touro: <?=$inseminacao->getTouroInseminador()?> </strong>
                <?=$inseminacao->getDtInseminacao()?>

                </div>
                <div>
                    <button name="altera" class="button-edit" onclick=""><i class="fa fa-edit fa-1x"></i></button>
                    <button name="exclui" class="button-delete" onclick=""><i class="fa fa-trash-alt fa-1x"></i></button>
                </div>
            </div>
        </div>
    <?php
        }
      }
    ?>
  </div>

  <div class="lista_fichas">
      <h1>Histórico de produção de leite</h1>  
        <?php
        require_once "../controller/classes/ProducaoDAO.php";
        $obj = new ProducaoDAO();
        $lista = $obj->buscar($codAnimal); 
        if(count($lista) == 0){
            echo "Nenhuma ficha encontrada.";
        }else{
            foreach ($lista as $producao){
        ?>     
        <div class="ficha-historico">
            <div class="label">
                <div class="ficha_descricao">
                <strong>Cód.: <?=$producao->getCodAnimal()?> </strong>
                <strong>Litros: <?=$producao->getLitros()?> </strong>
                <?=$producao->getDtColeta()?>  <?=$producao->getPeriodoDia()?>
                </div>
                <div>
                    <button name="altera" class="button-edit" onclick=""><i class="fa fa-edit fa-1x"></i></button>
                    <button name="exclui" class="button-delete" onclick=""><i class="fa fa-trash-alt fa-1x"></i></button>
                </div>
            </div>
        </div>
    <?php
        }
      }
    ?>
  </div>

  <div class="lista_fichas">
      <h1>Histórico de tratamento</h1>  
        <?php
        require_once "../controller/classes/TratamentoDAO.php";
        $obj = new TratamentoDAO();
        $lista = $obj->buscar($codAnimal); 
        if(count($lista) == 0){
            echo "Nenhuma ficha encontrada.";
        }else{
            foreach ($lista as $tratamento){
        ?>     
        <div class="ficha-historico">
            <div class="label">
                <div class="ficha_descricao">
                <strong>Cód.: <?=$tratamento->getCodAnimal()?> </strong>
                <strong>Remédio: <?=$tratamento->getNomeMedicamento()?> </strong>
                </div>
                <div>
                    <button name="altera" class="button-edit" onclick=""><i class="fa fa-edit fa-1x"></i></button>
                    <button name="exclui" class="button-delete" onclick=""><i class="fa fa-trash-alt fa-1x"></i></button>
                </div>
            </div>
        </div>
    <?php
        }
      }
    ?>
  </div>
  
  <?php require_once("../includes/footer.php");?>

</main>