<table>
  <tr>
    <th>Código do Animal</th>
    <th>Data de previsão de Nascimento</th>
  </tr>
<?php
$obj = new AnimalDAO();
$mes = ($_GET['filtroMes']);
$ano=($_GET['filtroAno']);
$lista = $obj->buscaMesAnoAnimal($mes, $ano);
if(count($lista) == 0){
    //echo "Nenhum relatório encontrado.";
}else{
    foreach ($lista as $animal){
?>     

  <tr>
    <td><?=$animal->getCodAnimal()?> </td>
    <td><?=date('d/m/Y', strtotime("+0 days",strtotime($animal->getDtNascimento())));?></td>

  </tr>

<?php
    }
    }
?>
</table>