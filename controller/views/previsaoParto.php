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
$obj = new inseminacaoDAO();
// if($parto==1){
//   $parto=6;
// } else if($parto==2){
//     $parto=7;
//   }
//   else if($parto==3){
//     $parto=8;
//   }
//   else if($parto==4){
//     $parto=9;
//   }
//   else if($parto==5){
//     $parto=10;
//   }
//   else if($parto==6){
//     $parto=11;
//   }
//   else if($parto==7){
//     $parto=12;
//   }
//   else if($parto==8){
//     $parto=1;
//   }
//   else if($parto==9){
//     $parto=2;
//   }
//   else if($parto==10){
//     $parto=3;
//   }
//   else if($parto==11){
//     $parto=4;
//   }
//   else if($parto==12){
//     $parto=5;
//   }
$lista = $obj->buscaMes($parto);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $inseminacao){
?>     

  <tr class="tr">
    <td class="td"><?=$inseminacao->getCodAnimal()?> </td>
    <td class="td"><?=date('d/m/Y', strtotime("+284 days",strtotime($inseminacao->getDtInseminacao())));?></td>
    <td class="td"><?=date('d/m/Y', strtotime("+0 days",strtotime($inseminacao->getDtInseminacao())));?></td>
  </tr>

<?php
    }
    }
?>
</table>
</div>
  </div>