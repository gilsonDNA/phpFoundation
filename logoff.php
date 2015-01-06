<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
<div class="span10">



    <div class="well">
        <h1> Você fez logoff no Sistema. </h1>
        <hr />

        <!-- inserindo conteudo na página -->
        <?php
            require_once("utilidades.php");
            destroiSessao();
        ?>


        <a class='btn btn-default'  role='button' href='empresa'>Fazer login</a>
        <hr />

    </div>
</div>