<table>
  <tr>
    <th>Código do Animal</th>
    <th>Data de previsão do parto</th>
    <th>Data de Inseminacao</th>
  </tr>
<?php
$parto=00;
$obj = new InseminacaoDAO();
if($_GET['filtroMes']==1){
  $parto=4;
} else if($_GET['filtroMes']==2){
    $parto=5;
  }
  else if($_GET['filtroMes']==3){
    $parto=6;
  }
  else if($_GET['filtroMes']==4){
    $parto=7;
  }
  else if($_GET['filtroMes']==5){
    $parto=8;
  }
  else if($_GET['filtroMes']==6){
    $parto=9;
  }
  else if($_GET['filtroMes']==7){
    $parto=10;
  }
  else if($_GET['filtroMes']==8){
    $parto=11;
  }
  else if($_GET['filtroMes']==9){
    $parto=12;
  }
  else if($_GET['filtroMes']==10){
    $parto=1;
  }
  else if($_GET['filtroMes']==11){
    $parto=2;
  }
  else if($_GET['filtroMes']==12){
    $parto=3;
  }
$lista = $obj->buscaMes($parto);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $inseminacao){
?>     

  <tr>
    <td><?=$inseminacao->getCodAnimal()?> </td>
    <td><?=date('d/m/Y', strtotime("+284 days",strtotime($inseminacao->getDtInseminacao())));?></td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtInseminacao())));?></td>
  </tr>

<?php
    }
    }
?>
</table>