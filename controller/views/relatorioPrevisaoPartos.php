<table>
  <tr>
    <th>Código do Animal</th>
    <th>Data de previsão do parto</th>
    <th>Data de Inseminacao</th>
  </tr>
<?php
$parto=00;
$obj = new InseminacaoDAO();
$lista = $obj->buscaMes($parto);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $inseminacao){
?>     

  <tr>
    <td><?=$inseminacao->getCodAnimal()?> </td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtPrevParto())));?></td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtInseminacao())));?></td>
  </tr>

<?php
    }
    }
?>
</table>