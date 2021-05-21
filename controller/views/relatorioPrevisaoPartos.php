<table>
  <tr>
    <th>Código do Animal</th>
    <th>Data de previsão do parto</th>
    <th>Data de Inseminacao</th>
  </tr>
<?php
$obj = new InseminacaoDAO();
$lista = $obj->buscaParto($_GET['filtroMes']);
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