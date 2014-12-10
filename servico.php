<?php
    include  __DIR__."/conteudo/conteudoDAO.php";
    $tipoConteudo = "servico";
?>

<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
<div class="span10">



    <div class="well">
        <h1> Página Serviços </h1>
        <hr />

        <!-- inserindo conteudo na página -->
        <?php
            $listConteudo = getListaConteudo($tipoConteudo);

            foreach($listConteudo as $conteudo){
                //var_dump($conteudo);
                echo "<p>".$conteudo['conteudo']."</p>" ;
            }
        ?>

        <hr />
        <button class="btn btn-primary btn-large">Clique aqui exemplo!</button>
    </div>
</div>