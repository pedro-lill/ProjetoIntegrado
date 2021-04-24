<?php require_once("includes/header.php");?>
    <main>
        <h2><?=$titulo ?></h2>
        <hr>
        <br><br>
        <h1>Lista de fichas</h1>

        <button class="button-form" onclick="window.location.href='views/adicionar-ficha.php'">Adicionar ficha</button>

        <div class="lista_fichas">
            <?php require_once("../includes/ficha.php");?>
        </div>
        <p>| <a href="fichaController.php?acao=cadastra">inserir novo</a> |</p>
        <table>
        <tr>
            <th>Código do animal</th>
            <th>Data de nascimento</th>
            <th>Código da mãe</th>
            <th>Nome do pai</th>
            <th>Estado de Vida</th>
        </tr>

        <?php
        if(count($lista) == 0){
            echo "<p>Nenhuma ficha encontrado.</p>";
        }
        else{
            foreach ($lista as $ficha){
            ?>     
                <tr>
                    <td><?=$ficha->getCodAnimal() ?></td>
                    <td><?=$ficha->getDtNascimento() ?></td>
                    <td><?=$ficha->getCodMae() ?></td>
                    <td><?=$ficha->getNomePai() ?></td>
                    <td><?=$ficha->getEstadoVida() ?></td>
                    <td>
                    <a href="fichaController.php?acao=altera&cod=<?=$ficha->getCodAnimal() ?>">alterar</a> 
                    | 
                    <a href="fichaController.php?acao=exclui&cod=<?=$ficha->getCodAnimal() ?>" 
                    onclick="return confirm('Tem certeza de que deseja excluir esta ficha?')">excluir</td>
                </tr>
            <?php
            }
        }
        ?>
        </table>
    </main>