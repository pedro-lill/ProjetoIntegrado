<h3>Previsões de parto</h3>
<table>
  <tr>
    <th>Código do Animal</th>
    <th>Data de previsão do parto</th>
  </tr>
<?php
$obj = new inseminacaoDAO();
$lista = $obj->buscaMes($_GET['dia']);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $inseminacao){
?>     

  <tr>
    <td><?=$inseminacao->getCodAnimal()?> </td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtInseminacao())));?></td>
  </tr>

<?php
    }
    }
?>
</table>