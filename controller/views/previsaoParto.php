<div class="container-tabela-previsao">
<h3>Previsões de parto</h3>
<table class="table">
  <tr class="tr">
    <th class="th">Código do Animal</th>
    <th class="th">Data de previsão do parto</th>
    <th class="th">Data de Inseminacao</th>
  </tr>
<?php
$parto=$_GET['mes'];
$obj = new InseminacaoDAO();

$lista = $obj->buscaMes($parto);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $inseminacao){
?>     

  <tr class="tr">
    <td class="td"><?=$inseminacao->getCodAnimal()?> </td>
    <td class="td"><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtPrevParto())));?></td>
    <td class="td"><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtInseminacao())));?></td>
  </tr>

<?php
    }
    }
?>
</table>
</div>
  </div>