<?php
include  __DIR__."/conteudo/conteudoDAO.php";
$tipoConteudo = "empresa";
?>
<!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
<div class="span10">



    <div class="well">
        <h1> Resultado da Pesquisa </h1>
        <hr />

        <!-- inserindo conteudo na página -->
        <?php
        if(!isset( $_POST['submit']) ){

            $palavraPesquisada = $_POST['palavraPesquisada'];

            $listPaginas = getListaPaginas($palavraPesquisada);


            foreach($listPaginas as $pagina){
                //var_dump($conteudo);
                $nomePagina = $pagina['pagina'];
                $nomePaginaComExtensao = $nomePagina.".php";


                echo "<p>".$palavraPesquisada." encontrado em  - <a href='".$nomePagina."' title='clique para acessar'>".$nomePaginaComExtensao."</a></p>" ;
            }
        }

       //.$pagina['pagina'].".php


        ?>

        <hr />

    </div>
</div>