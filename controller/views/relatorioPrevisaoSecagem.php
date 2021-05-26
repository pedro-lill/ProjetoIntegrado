<table>
  <tr>
    <th>Código do Animal</th>
    <th>Previsao de Secagem</th>
    <th>Data de Inseminacao</th>
    
  </tr>
<?php
$obj = new InseminacaoDAO();
$mes=($_GET['filtroMes']);
$ano=($_GET['filtroAno']);
$lista = $obj->buscaMesAnoSecagem($mes, $ano);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $inseminacao){
?>     

  <tr>
    <td><?=$inseminacao->getCodAnimal()?> </td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtPrevSecagem())));?></td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtInseminacao())));?></td>
    
  </tr>

<?php
    }
    }
?>
</table>
