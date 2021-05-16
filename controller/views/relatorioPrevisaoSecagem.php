<table>
  <tr>
    <th>Código do Animal</th>
    <th>Previsao de Secagem</th>
    <th>Data de Inseminacao</th>
    
  </tr>
<?php
$secagem=00;
$obj = new inseminacaoDAO();
if($_GET['filtroMes']==1){
  $secagem=6;
} else if($_GET['filtroMes']==2){
    $secagem=7;
  }
  else if($_GET['filtroMes']==3){
    $secagem=8;
  }
  else if($_GET['filtroMes']==4){
    $secagem=9;
  }
  else if($_GET['filtroMes']==5){
    $secagem=10;
  }
  else if($_GET['filtroMes']==6){
    $secagem=11;
  }
  else if($_GET['filtroMes']==7){
    $secagem=12;
  }
  else if($_GET['filtroMes']==8){
    $secagem=1;
  }
  else if($_GET['filtroMes']==9){
    $secagem=2;
  }
  else if($_GET['filtroMes']==10){
    $secagem=3;
  }
  else if($_GET['filtroMes']==11){
    $secagem=4;
  }
  else if($_GET['filtroMes']==12){
    $secagem=5;
  }

$lista = $obj->buscaMes($secagem);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $inseminacao){
?>     

  <tr>
    <td><?=$inseminacao->getCodAnimal()?> </td>
    <td><?=date('d/m/Y', strtotime("+224 days",strtotime($inseminacao->getDtInseminacao())));?></td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtInseminacao())));?></td>
    
  </tr>

<?php
    }
    }
?>
</table>
