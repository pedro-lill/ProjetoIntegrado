<table>
  <tr>
    <th>Código do Animal</th>
    <th>Data da Coleta</th>
    <th>Produção</th>
  </tr>
<?php
$obj = new ProducaoDAO();
$lista = $obj->buscaMes($_GET['filtroMes']);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $producao){
?>     

  <tr>
    <td><?=$producao->getCodAnimal()?> </td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($producao->getDtColeta())));?></td>
    <td><?=$producao->getLitros()?></td>
  </tr>

<?php
    }
    }
?>
</table>