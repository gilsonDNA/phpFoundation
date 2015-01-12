<?php
    include __DIR__ . "/admin/conteudo/conteudoDAO.php";
    $tipoConteudo = "produto";
?>
<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
<div class="span10">


    <form class="form-horizontal"  role="form" method="post" >
        <div class="well">
            <h1> Página Produto </h1>
            <hr />

            <!-- inserindo conteudo na página -->
            <?php
                $conteudo = getConteudo($tipoConteudo);

                echo "<p>".$conteudo['conteudo']."</p>" ;

            ?>


            <hr />
            <a href="produtoEdit">Alterar Texto</a>
        </div>

    </form>
</div>