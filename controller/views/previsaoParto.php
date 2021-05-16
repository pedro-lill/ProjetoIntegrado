<h3>Previsões de parto</h3>
<table>
  <tr>
    <th>Código do Animal</th>
    <th>Data de previsão do parto</th>
    <th>Data de Inseminacao</th>
  </tr>
<?php
$parto=00;
$obj = new inseminacaoDAO();
if($_GET['mes']==1){
  $parto=6;
} else if($_GET['mes']==2){
    $parto=7;
  }
  else if($_GET['mes']==3){
    $parto=8;
  }
  else if($_GET['mes']==4){
    $parto=9;
  }
  else if($_GET['mes']==5){
    $parto=10;
  }
  else if($_GET['mes']==6){
    $parto=11;
  }
  else if($_GET['mes']==7){
    $parto=12;
  }
  else if($_GET['mes']==8){
    $parto=1;
  }
  else if($_GET['mes']==9){
    $parto=2;
  }
  else if($_GET['mes']==10){
    $parto=3;
  }
  else if($_GET['mes']==11){
    $parto=4;
  }
  else if($_GET['mes']==12){
    $parto=5;
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